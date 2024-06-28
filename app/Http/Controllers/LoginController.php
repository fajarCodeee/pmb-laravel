<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        // validasi input username & password
        $request->validate([
            // 'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'username/email wajib diisi!',
            'password.required' => ':attribute wajib diisi!'
        ]);

        // tentukan login dengan email/username
        $typeLogin = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // ambil requets email dan password
        // $credential = $request->only('email', 'password');
        $credential = [
            $typeLogin => $request->input('email'),
            'password' => $request->input('password')
        ];

        // cek request email dan password (valid)
        if (Auth::attempt($credential)) {
            // simpan data ke variable $user
            $user = Auth::user();
            // cek level/role user (admin)
            if ($user->level == 'admin') {
                return redirect()->intended('/admin/home');
            }

            // cek jika level/role (peserta_cbt)
            else if ($user->level == 'peserta_cbt') {
                return redirect()->intended('/cbt/home');
            }

            // jika role tidak ditemukan
            return redirect()->intended('/');
        }

        return redirect('/login')
            ->withInput()
            ->withErrors(['login_error' => 'Username atau password yang anda masukan salah!']);
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
