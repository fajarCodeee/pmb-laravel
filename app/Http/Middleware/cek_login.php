<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {

        // cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // simpan data user dalam variabel $user
        $user = Auth::user();

        // lanjutkan request sesuai dengan level user
        if ($user->level == $roles) {
            return $next($request);
        }

        // jika user tidak memiliki akses
        return redirect('login')->with('error', 'maaf anda tidak memiliki izin untuk mengakses halaman ini');

        // return $next($request);
    }
}
