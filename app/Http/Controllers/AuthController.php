<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // 1. Tampilkan Halaman Login
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    // 2. Proses Login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Coba login menggunakan username
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Cek apakah akun aktif
            if (!Auth::user()->is_active) {
                Auth::logout();
                return back()->withErrors(['username' => 'Akun Anda dinonaktifkan.']);
            }

            // Redirect ke dashboard
            return redirect()->intended('dashboard');
        }

        // Jika gagal
        return back()->withErrors([
            'username' => 'Username atau password yang Anda masukkan salah.',
        ])->onlyInput('username');
    }

    // 3. Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}