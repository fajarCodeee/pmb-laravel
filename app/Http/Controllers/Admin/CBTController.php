<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SoalCbt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CBTController extends Controller
{
    public function statistikCbt()
    {
        $title_page = 'Statistik CBT';
        $username = Auth::user();
        $title = 'Statistik CBT';

        return view('admin.menus.statistik_cbt.index', compact('title_page', 'username', 'title'));
    }

    public function dataPeserta()
    {
        $title_page = 'Data Peserta';
        $username = Auth::user();
        $title = 'Data Peserta';

        return view('admin.menus.dataPeserta.index', compact('title_page', 'username', 'title'));
    }

    public function kelolaUjianCbt()
    {
        $title_page = 'Kelola Ujian CBT';
        $username = Auth::user();
        $title = 'Kelola Ujian CBT';

        $soal_cbt = SoalCbt::with('jawabanCbt')->get();

        return view('admin.menus.kelola-ujian-cbt.index', compact('title_page', 'username', 'title', 'soal_cbt'));
    }

    // view create soal
    public function create()
    {
        $title_page = 'Buat Soal CBT';
        $username = Auth::user();
        $title = 'Kelola Ujian CBT';

        return view('admin.menus.kelola-ujian-cbt.create-soal', compact('title_page', 'username', 'title'));
    }

    public function store_soal(Request $request)
    {
        $request->validate([
            'isi_soal' => 'required|string',
            'jawaban.*' => 'required|string',
            'jawaban_benar' => 'required|string'
        ]);

        DB::beginTransaction();
        try {

            $soal = SoalCbt::create([
                'isi_soal' => $request->input('isi_soal')
            ]);

            // jawaban
            $jawabanData = [];
            foreach ($request->input('jawaban') as $key => $value) {
                $jawabanData[] = [
                    'jawaban' => $value,
                    'is_correct' => $key == $request->input('jawaban_benar')
                ];
            }
            // save
            $soal->jawabanCbt()->createMany($jawabanData);
            DB::commit();

            return redirect()->route('kelola-ujian-cbt.create')->with('success', 'Soal telah berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('kelola-ujian-cbt.create')->with('error', 'Kesalahan saat mengirimkan data : \n' . $e->getMessage());
            // dd($e);
        }
    }

    public function show_soal($id)
    {
        $soal = SoalCbt::with('jawabanCbt')->findOrFail($id);
        return response()->json([
            'data' => $soal
        ]);
    }
}
