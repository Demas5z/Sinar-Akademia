<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function tampilLogin(){
        return view('login');
    }

    // function submitLogin(Request $request) {
    //     $data = $request->only('email', 'password');

    //     if (Auth::attempt($data)){
    //         $request->session()->regenerate();
    //         return redirect()->route('mahasiswa.tampil');
    //     } else {
    //         return redirect()->back()->with('gagal', 'Email atau password anda salah');
    //     }
    // }
}
