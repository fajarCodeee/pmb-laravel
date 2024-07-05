<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $title_page = 'Home';
        $username = Auth::user();
        $title =  'Dashboard';



        return view('admin.menus.dashboard.index', compact('title_page', 'username', 'title'));
    }
}
