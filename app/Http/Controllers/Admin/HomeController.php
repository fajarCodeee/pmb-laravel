<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['title_page'] = 'Home';
        $data['username'] = 'Administrator';
        $data['title'] = 'Dashboard';

        return view('admin.menus.dashboard.index', $data);
    }
}
