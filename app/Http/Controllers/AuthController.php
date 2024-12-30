<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Menampilkan halaman login
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cari pengguna berdasarkan username
        $user = User::where('username', $request->username)->first();

        // Verifikasi password dengan Hash::check()
        if ($user && Hash::check($request->password, $user->password)) {
            // Login pengguna
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        // Jika gagal login
        return back()->withErrors(['login_error' => 'Username atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
