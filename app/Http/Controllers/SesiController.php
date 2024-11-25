<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
            'email.email' => 'Format email tidak valid',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Autentikasi
        if (Auth::attempt($credentials)) {
            // Ambil role pengguna
            $role = Auth::user()->role;

            // Simpan role ke session
            session(['role' => $role]);

            // Redirect ke dashboard
            return redirect()->route('dashboard');
        }

        // Jika login gagal
        return redirect('/')
            ->withErrors('Email atau password salah')
            ->withInput();
    }

    // Menampilkan dashboard berdasarkan role
    public function dashboard()
    {
        // Ambil role dari session
        $role = session('role');

        // Logika untuk mengarahkan berdasarkan role
        switch ($role) {
            case 'Mahasiswa':
                return view('mahasiswa.dashboard');
            case 'PembimbingAkademik':
                return view('PembimbingAkademik.dashboard');
            case 'Kaprodi':
                return view('kaprodi.dashboard');
            case 'BagianAkademik':
                return view('akademik.dashboard');
            case 'Dekan':
                return view('dekan.dashboard');
            default:
                // Logout jika role tidak valid
                Auth::logout();
                return redirect('/')->withErrors('Role tidak dikenali');
        }
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/')->with('success', 'Anda berhasil logout');
    }
}
