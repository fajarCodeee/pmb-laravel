<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gelombang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GelombangPendaftaranController extends Controller
{
    public function index()
    {
        $title_page = 'Gelombang Pendaftaran';
        $username = Auth::user();
        $title = 'Gelombang Pendaftaran';
        $gelombang = Gelombang::latest()->get();

        return view('admin.menus.gelombangPendaftaran.index', compact('title_page', 'username', 'title', 'gelombang'));
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
