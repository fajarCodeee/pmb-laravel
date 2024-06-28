<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CbtController extends Controller
{
    public function index()
    {
        return view('cbt.index');
    }
}
