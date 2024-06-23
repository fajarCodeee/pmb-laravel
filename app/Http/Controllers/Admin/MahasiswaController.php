<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MahasiswaBaru;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Data Mahasiswa Baru';
        $data['username'] = 'Administrator';
        $data['title'] = 'Daftar Mahasiswa';

        $data['mahasiswa'] = MahasiswaBaru::all();

        return view('admin.menus.mahasiswa.index', $data);
    }
}
