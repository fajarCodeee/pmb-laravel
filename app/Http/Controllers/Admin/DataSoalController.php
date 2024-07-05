<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DataSoalController extends Controller
{
    public function index()
    {
        $title_page = 'Data Soal';
        $username = Auth::user();
        $title = 'Data Soal';

        return view('admin.menus.dataSoal.index', compact('title_page', 'username', 'title'));
    }
}
