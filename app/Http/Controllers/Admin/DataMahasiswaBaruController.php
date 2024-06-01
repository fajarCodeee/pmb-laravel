<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DataMahasiswaBaruController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Data Mahasiswa Baru';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Mahasiswa';

        return view('admin.menus.dataMahasiswaBaru.index', $data);
    }
}
