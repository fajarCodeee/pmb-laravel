<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NotifByEmail;
use App\Models\FormPendaftaran;
use App\Models\MahasiswaBaru;
use App\Models\Prodi;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class DataMahasiswaBaruController extends Controller
{

    public function index()
    {
        $data['title_page'] = 'Data Calon Mahasiswa Baru';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Mahasiswa';

        $data['mahasiswa'] = FormPendaftaran::latest()->get();

        return view('admin.menus.dataMahasiswaBaru.index', $data);
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
            $update = $data->save();

            if ($update) {
                $mahasiswa = new MahasiswaBaru();

                // mengisi field data mahasiswa baru
                $mahasiswa->fill($data->toArray());

                // tahun-ajaran
                $tahunAjaran = $data->created_at->format('Y');

                // membuat nim
                $nim = $this->generateNIM($data->prodi_id, $tahunAjaran, $data->kelas_id);

                $mahasiswa->nim = $nim;

                // simpan
                $save = $mahasiswa->save();

                if ($save) {
                    // buat akun CBT
                    $pass = $this->generatePass();
                    $createAccount = User::create([
                        'username' => $this->username($data->namaLengkap),
                        'password' => Hash::make($pass),
                        'email' => $data->email,
                        'level' => 'peserta_cbt'
                    ]);

                    $userId = $createAccount->id;

                    if ($createAccount) {
                        // send notif
                        $user = User::findOrFail($userId);

                        $mailData = [
                            'username' => $user->email,
                            'password' => $pass . '-' . $user->password
                        ];

                        Mail::to($data->email)->send(new NotifByEmail($mailData));
                    }
                } else {
                    // Rollback transaksi jika penyimpanan mahasiswa gagal
                    DB::rollBack();
                    return response()->json(['message' => 'Gagal menyimpan data mahasiswa baru'], 500);
                }
            } else {
                // Rollback transaksi jika update status gagal
                DB::rollBack();
                return response()->json(['message' => 'Gagal mengupdate status'], 500);
            }

            // Commit transaksi jika semua operasi berhasil
            DB::commit();
            return response()->json(['message' => 'Data Telah diterima']);
        } catch (\Exception $e) {
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
