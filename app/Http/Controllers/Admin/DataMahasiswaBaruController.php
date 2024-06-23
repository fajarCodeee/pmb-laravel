<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormPendaftaran;
use App\Models\MahasiswaBaru;
use App\Models\Prodi;
use GuzzleHttp\Psr7\Request;

class DataMahasiswaBaruController extends Controller
{

    public function index()
    {
        $data['title_page'] = 'Data Calon Mahasiswa Baru';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Mahasiswa';

        $data['mahasiswa'] = FormPendaftaran::all();

        return view('admin.menus.dataMahasiswaBaru.index', $data);
    }



    public function acceptStatus($id)
    {
        $data = FormPendaftaran::findOrFail($id);

        $data->status = '1';
        $data->save();

        $mahasiswa = new MahasiswaBaru();
        $mahasiswa->fill($data->toArray());

        $tahunAjaran = $data->created_at->format('Y');
        // $kodeProdi = $data->prodi->kodeProdi;

        $nim = $this->generateNIM($data->prodi_id, $tahunAjaran, $data->kelas_id);

        $mahasiswa->nim = $nim;

        $mahasiswa->save();

        return response()->json(['message' => 'Ditambahkan']);
    }

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

    public function rejectStatus($id)
    {
        $data = FormPendaftaran::findOrFail($id);
        $data->status = '-1';
        $data->save();

        return response()->json(['message' => 'Data ditolak/tidak diterima!']);
    }
}
