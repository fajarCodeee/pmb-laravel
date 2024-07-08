<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NotifByEmail;
use App\Models\FormPendaftaran;
use App\Models\MahasiswaBaru;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class DataMahasiswaBaruController extends Controller
{

    public function index()
    {
        $title_page = 'Data Calon Mahasiswa Baru';
        $username = Auth::user();
        $title = 'Data Mahasiswa';

        $mahasiswa = FormPendaftaran::latest()->paginate(25);

        return view('admin.menus.dataMahasiswaBaru.index', compact('title_page', 'username', 'title', 'mahasiswa'));
    }

    // menampilkan detail data calon mahasiswa
    public function showData($id)
    {
        $data = FormPendaftaran::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Menampilkan data calon mahasiswa',
            'data' => $data
        ]);
    }

    // tolak
    public function rejectStatus($id)
    {
        $data = FormPendaftaran::findOrFail($id);
        $data->status = '-1';
        $data->save();

        return response()->json(['message' => 'Data ditolak/tidak diterima!']);
    }

    // terima/konfirmasi
    public function acceptStatus($id)
    {
        // Memulai transaksi
        DB::beginTransaction();

        try {
            $data = FormPendaftaran::findOrFail($id);

            // update status
            $data->status = '1';

            // save
            if (!$data->save()) {
                // Rollback transaksi jika update status gagal
                DB::rollBack();
                return response()->json(['message' => 'Gagal mengupdate status'], 500);
            }

            $mahasiswa = new MahasiswaBaru();
            $mahasiswa->fill($data->toArray());
            $mahasiswa->nim = 0;
            $save = $mahasiswa->save();

            if ($save) {
                // buat akun CBT
                $pass = $this->generatePass();
                $createAccount = User::create([
                    'username' => $this->username($mahasiswa->namaLengkap . '' . rand(0, 5)),
                    'password' => Hash::make($pass),
                    'email' => $mahasiswa->email,
                    'level' => 'peserta_cbt'
                ]);
            } else {
                DB::rollBack();
                return response()->json(['message' => 'Gagal menyimpan data mahasiswa baru'], 500);
            }

            if (!$createAccount) {
                // Rollback transaksi jika penyimpanan mahasiswa gagal
                DB::rollBack();
                return response()->json(['message' => 'Gagal menyimpan data mahasiswa baru'], 500);
            }

            $userId = $createAccount->id;

            // send notif
            $user = User::findOrFail($userId);

            $mailData = [
                'username' => $user->email,
                'password' => $pass, // Hanya mengirim password, bukan password hash
                // 'link_cbt' => url('/cbt/home')
                'link_cbt' => '(menyusul)'
            ];

            Mail::to($data->email)->send(new NotifByEmail($mailData));

            // Commit transaksi jika semua operasi berhasil
            DB::commit();
            return response()->json(['message' => 'Data Telah diterima']);
        } catch (\Throwable $e) { // Menggunakan Throwable untuk menangkap semua jenis error
            // Rollback transaksi jika terjadi kesalahan
            DB::rollBack();
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }



    // generate nim
    private function generateNIM($prodi, $tahunMasuk, $kelas)
    {
        $tahun = substr($tahunMasuk, -2);

        // Cari mahasiswa terakhir berdasarkan prodi dan kelas
        $lastStudent = MahasiswaBaru::where('prodi_id', $prodi)
            ->where('kelas_id', $kelas)
            ->orderBy('nim', 'desc')
            ->first();

        if ($lastStudent) {
            // Ambil nomor urut terakhir dari NIM dan tambahkan 1
            $lastNumber = (int) substr($lastStudent->nim, -3);
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika belum ada mahasiswa, mulai dari 001
            $newNumber = '001';
        }

        $kodeProdi = Prodi::where('id', $prodi)->first();

        // Gabungkan semua bagian untuk membentuk NIM
        $nim = sprintf("%s%s%s%s", $kodeProdi->kodeProdi, $tahun, $kelas, $newNumber);

        return $nim;
    }

    // generate password
    private function generatePass()
    {
        $password = Str::random(12);
        return $password;
    }

    private function username($string)
    {
        // Pisahkan string berdasarkan spasi
        $words = explode(' ', $string);

        // Ubah huruf pertama dari setiap kata menjadi huruf besar kecuali kata pertama
        $camelCaseString = strtolower($words[0]);
        for ($i = 1; $i < count($words); $i++) {
            $camelCaseString .= ucfirst(strtolower($words[$i]));
        }

        return $camelCaseString;
    }
}
