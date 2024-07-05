<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MahasiswaBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function index()
    {
        $title_page = 'Data Mahasiswa Baru';
        $username = Auth::user();
        $title = 'Daftar Mahasiswa';

        $mahasiswa = MahasiswaBaru::all();

        return view('admin.menus.mahasiswa.index', compact('title_page', 'username', 'title', 'mahasiswa'));
    }
}
