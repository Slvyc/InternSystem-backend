<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // directs to the login form view
    public function showLoginForm() {
        return view('login');
    }

    public function login(Request $request) {
        // Memastikan bahwa email dan password wajib diisi.
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Mengambil hanya email dan password dari input form.
        $credentials = $request->only('email', 'password');
        // Mengambil data user dari database berdasarkan email.
        $user = User::where('email', $credentials['email'])->first();
        // Mengecek apakah user ditemukan dan password sesuai.
        // Jika benar, user akan di-login dengan Auth::login.
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else if ($user->role === 'mentor') {
                return redirect()->route('mentor.dashboard');
            } else if ($user->role === 'peserta') {
                return redirect()->route('peserta.dashboard');
            } 
            // Setelah login, user diarahkan ke halaman sesuai dengan perannya (admin, mentor, atau peserta).
        }
        // Jika email atau password salah, akan mengembalikan ke halaman login dengan pesan error.
        return back()->withErorrs(['email' => 'Email atau Password salah']);

    }
    // Fungsi untuk logout user
    // Menggunakan Auth::logout untuk mengeluarkan user dari sesi.
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
