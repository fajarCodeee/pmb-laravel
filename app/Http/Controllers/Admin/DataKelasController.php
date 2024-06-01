<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class DataKelasController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Data Kelas';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Kelas';
        $data['kelas'] = Kelas::latest()->get();

        return view('admin.menus.dataKelas.index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'namaKelas' => 'required|min:3',
            'waktuKelas' => 'required'
        ], [
            'namaKelas.required' => 'Nama Kelas Wajib Diisi!',
            'namaKelas.min' => 'Nama Kelas Harus Lebih Dari 3 Karakter',
            'waktuKelas.required' => 'Silahkan Pilih Salah Satu!'
        ]);
        $kelas = Kelas::create([
            'namaKelas' => $request->namaKelas,
            'waktu' => $request->waktuKelas
        ]);

        return response()->json([
            'success' => true,
            'message' => "Data Berhasil Ditambahkan!",
            'data' => $kelas
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Menampilkan Data',
            'data' => Kelas::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'namaKelas' => 'required|min:3',
            'waktuKelas' => 'required'
        ], [
            'namaKelas.required' => 'Nama Kelas Wajib Diisi!',
            'namaKelas.min' => 'Nama Kelas Harus Lebih Dari 3 Karakter',
            'waktuKelas' => 'Silahkan Pilih Salah Satu!'
        ]);
        $kelas = Kelas::findOrFail($id)->update([
            'namaKelas' => $request->namaKelas,
            'waktu' => $request->waktuKelas
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diupdate!',
            'data' => $kelas
        ]);
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id)->delete();
        // return back()->with('success', 'Berhasil Menghapus Data!');
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Dihapus!',
            'data' => $kelas
        ]);
    }
}
