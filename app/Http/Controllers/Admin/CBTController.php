<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SoalCbt;
use Illuminate\Http\Request;

class CBTController extends Controller
{
    public function statistikCbt()
    {
        $data['title_page'] = 'Statistik CBT';
        $data['username'] = 'Administrator';
        $data['title'] = 'Statistik CBT';

        return view('admin.menus.statistik_cbt.index', $data);
    }

    public function dataPeserta()
    {
        $data['title_page'] = 'Data Peserta';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Peserta';

        return view('admin.menus.dataPeserta.index', $data);
    }

    public function kelolaUjianCbt()
    {
        $data['title_page'] = 'Kelola Ujian CBT';
        $data['username'] = 'Administrator';
        $data['title'] = 'Kelola Ujian CBT';

        $data['soal_cbt'] = SoalCbt::with('jawabanCbt')->get();

        return view('admin.menus.kelola-ujian-cbt.index', $data);
    }
}
