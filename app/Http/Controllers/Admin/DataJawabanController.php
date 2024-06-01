<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataJawabanController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Data Jawaban';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Jawaban';

        return view('admin.menus.dataJawaban.index', $data);
    }
}
