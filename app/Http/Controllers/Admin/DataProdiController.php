<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DataProdiController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Data Prodi';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Prodi';
        $data['prodis'] = Prodi::latest()->get();

        return view('admin.menus.dataProdi.index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'namaProdi' => 'required',
            'kodeProdi' => 'required|unique:prodis,kodeProdi',
            'gelar' => 'required',
        ], [
            'namaProdi.required' => 'Nama Prodi Wajib Diisi!',
            'kodeProdi.required' => 'Kode Prodi Wajib Diisi!',
            'kodeProdi.unique' => 'Kode Prodi Tidak Boleh Sama!',
            'gelar.required' => 'Pilih Salah Satu!'
        ]);
        $prodi = Prodi::create([
            'namaProdi' => $request->namaProdi,
            'kodeProdi' => $request->kodeProdi,
            'gelar' => $request->gelar,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $prodi
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Program Studi',
            'data' => Prodi::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'namaProdi' => 'required',
            'kodeProdi' => 'required|unique:prodis,kodeProdi,' . $id,
            'gelar' => 'required',
        ], [
            'namaProdi.required' => 'Nama Prodi Wajib Diisi!',
            'kodeProdi.required' => 'Kode Prodi Wajib Diisi!',
            'kodeProdi.unique' => 'Kode Prodi Tidak Boleh Sama!',
            'gelar.required' => 'Pilih Salah Satu!'
        ]);
        $prodi = Prodi::findOrFail($id)->update([
            'namaProdi' => $request->namaProdi,
            'kodeProdi' => $request->kodeProdi,
            'gelar' => $request->gelar,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diupdate!',
            'data'    => $prodi
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Dihapus!',
            'data' => Prodi::findOrFail($id)->delete()
        ]);
    }
}
