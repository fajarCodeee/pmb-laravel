<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataJawabanController extends Controller
{
    public function index()
    {
        $title_page = 'Data Jawaban';
        $username = Auth::user();
        $title = 'Data Jawaban';

        return view('admin.menus.dataJawaban.index', compact('title_page', 'username', 'title'));
    }
}
