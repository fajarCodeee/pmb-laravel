<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataSoalController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Data Soal';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Soal';

        return view('admin.menus.dataSoal.index', $data);
    }
}
