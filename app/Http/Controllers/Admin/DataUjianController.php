<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataUjianController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Data Ujian';
        $data['username'] = 'Administrator';
        $data['title'] = 'Data Ujian';

        return view('admin.menus.dataUjian.index', $data);
    }
}
