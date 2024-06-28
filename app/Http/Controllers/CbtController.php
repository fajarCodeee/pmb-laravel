<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CbtController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('cbt.index', compact('user'));
    }

    public function soalUjian()
    {
        $user = Auth::user();
        return view('cbt.soal-ujian', compact('user'));
    }
}
