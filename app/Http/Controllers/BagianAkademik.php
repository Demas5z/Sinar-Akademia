<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use Illuminate\Support\Facades\DB;

class BagianAkademik extends Controller
{
    public function buatDaftarRuang()
    {
        // Mengambil data distinct gedung
        $gedungs = DB::table('ruang')->select('Gedung')->distinct()->pluck('Gedung');
        
        // Kirimkan data gedung ke view
        return view('Akademik.BuatDaftarRuang', compact('gedungs'));
    }

    public function getRuang()
    {
        $data = DB::table('ruang')->get(); // Mengambil data dari tabel ruang
        return response()->json($data);
    }

    
}
