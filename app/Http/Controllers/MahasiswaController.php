<?php


namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function showProfile()
    {
        // Ambil data mahasiswa berdasarkan id atau email yang sesuai
        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();

        return view('Mahasiswa.dashboard', compact('mahasiswa'));
    }
}
