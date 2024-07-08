<?php

namespace App\Http\Controllers\Admin;

use App\Exports\MahasiswaExport;
use App\Http\Controllers\Controller;
use App\Models\MahasiswaBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    public function index()
    {
        $title_page = 'Data Mahasiswa Baru';
        $username = Auth::user();
        $title = 'Daftar Mahasiswa';

        $mahasiswa = MahasiswaBaru::latest()->paginate(25);

        return view('admin.menus.mahasiswa.index', compact('title_page', 'username', 'title', 'mahasiswa'));
    }

    public function export()
    {
        return Excel::download(new MahasiswaExport, 'mahasiswa_baru.xlsx');
    }
}
