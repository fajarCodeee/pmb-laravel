<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataAdminstrasiPMB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataRekeningController extends Controller
{
    public function index()
    {
        $title_page = 'Data Rekening Administrasi';
        $title = 'Data Rekening';
        $username = Auth::user();

        $rekening = DataAdminstrasiPMB::latest()->get();

        return view('admin.menus.dataRekening.index', compact('title_page', 'title', 'username', 'rekening'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'jenis_administrasi' => 'required',
            'nama_bank' => 'required',
            'nomer_rekening' => 'required|min:10',
            'nama_pemilik' => 'required|min:3',
            'jumlah_administrasi' => 'required'
        ], [
            'jenis_administrasi.required' => 'Silahkan pilih terlebih dahulu!',
            'nama_bank.required' => 'Silahkan pilih terlebih dahulu!',
            'nomer_rekening.required' => 'Silahkan isi nomer rekening!',
            'nomer_rekening.min' => 'Nomer rekening minimal 10 digit!',
            'nama_pemilik.required' => 'Silahkan masukan nama pemilik!',
            'nama_pemilik.min' => 'Nama pemilik minimal 3 karakter!',
            'jumlah_administrasi' => 'Silahkan masukan nominal administrasi!'
        ]);

        if ($valid) {
            $data = DataAdminstrasiPMB::create([
                'jenis_administrasi' => $request->jenis_administrasi,
                'nama_bank' => $request->nama_bank,
                'no_rekening' => $request->nomer_rekening,
                'nama_pemilik' => $request->nama_pemilik,
                'jumlah_administrasi' => $request->jumlah_administrasi
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ]);
    }

    public function show($id)
    {
        $data = DataAdminstrasiPMB::findOrFail($id);

        return response()->json([
            'status' => true,
            'message' => 'Menampilkan Data',
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'jenis_administrasi' => 'required',
            'nama_bank' => 'required',
            'nomer_rekening' => 'required|min:10',
            'nama_pemilik' => 'required|min:3',
            'jumlah_administrasi' => 'required'
        ], [
            'jenis_administrasi.required' => 'Silahkan pilih terlebih dahulu!',
            'nama_bank.required' => 'Silahkan pilih terlebih dahulu!',
            'nomer_rekening.required' => 'Silahkan isi nomer rekening!',
            'nomer_rekening.min' => 'Nomer rekening minimal 10 digit!',
            'nama_pemilik.required' => 'Silahkan masukan nama pemilik!',
            'nama_pemilik.min' => 'Nama pemilik minimal 3 karakter!',
            'jumlah_administrasi' => 'Silahkan masukan nominal administrasi!'
        ]);

        if ($valid) {
            $data = DataAdminstrasiPMB::findOrFail($id)->update([
                'jenis_administrasi' => $request->jenis_administrasi,
                'nama_bank' => $request->nama_bank,
                'no_rekening' => $request->nomer_rekening,
                'nama_pemilik' => $request->nama_pemilik,
                'jumlah_administrasi' => $request->jumlah_administrasi
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil diupdate!',
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $data = DataAdminstrasiPMB::findOrFail($id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil dihapus!'
        ]);
    }
}
