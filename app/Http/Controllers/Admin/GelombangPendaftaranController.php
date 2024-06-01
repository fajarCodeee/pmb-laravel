<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gelombang;
use Illuminate\Http\Request;

class GelombangPendaftaranController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Gelombang Pendaftaran';
        $data['username'] = 'Administrator';
        $data['title'] = 'Gelombang Pendaftaran';
        $data['gelombang'] = Gelombang::latest()->get();

        return view('admin.menus.gelombangPendaftaran.index', $data);
    }

    public function show($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Menampilkan Detail',
            'data' => Gelombang::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'namaGelombang' => 'required',
            'tanggalMulai' => 'required',
            'tanggalAkhir' => 'required'
        ], [
            'namaGelombang.required' => 'Nama Gelombang Wajib Diisi!',
            'tanggalMulai.required' => 'Tanggal Mulai Gelombang Wajib Diisi!',
            'tanggalAkhir.required' => 'Tanggal Akhir Gelombang Wajib Diisi!',
        ]);

        $gelombang = Gelombang::create([
            'namaGelombang' => $request->namaGelombang,
            'tanggalMulai' => $request->tanggalMulai,
            'tanggalAkhir' => $request->tanggalAkhir
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Ditambahkan',
            'data' => $gelombang
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'namaGelombang' => 'required',
            'tanggalMulai' => 'required',
            'tanggalAkhir' => 'required'
        ], [
            'namaGelombang.required' => 'Nama Gelombang Wajib Diisi!',
            'tanggalMulai.required' => 'Tanggal Mulai Gelombang Wajib Diisi!',
            'tanggalAkhir.required' => 'Tanggal Akhir Gelombang Wajib Diisi!',
        ]);


        Gelombang::findOrFail($id)->update([
            'namaGelombang' => $request->namaGelombang,
            'tanggalMulai' => $request->tanggalMulai,
            'tanggalAkhir' => $request->tanggalAkhir
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diperbaharui'
        ]);
    }

    public function destroy($id)
    {
        Gelombang::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Dihapus!'
        ]);
    }
}
