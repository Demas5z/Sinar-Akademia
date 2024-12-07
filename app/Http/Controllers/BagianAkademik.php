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
        $gedungs = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K"];
        
        // Kirimkan data gedung ke view
        return view('Akademik.BuatDaftarRuang', compact('gedungs'));
    }

    public function getRuang()
    {
        $data = DB::table('ruang')->get(); // Mengambil data dari tabel ruang
        return response()->json($data);
    }

    public function createRuang(Request $request)
    {
        $validatedData = $request->validate([
        'Nama_Ruang' => 'required|string|max:255',
        'Kuota' => 'required|integer|min:1',
        'Gedung' => ['required', 'string', 'max:1', 'uppercase'],
        ]);

        // Tambahkan nilai default untuk Status
        $validatedData['Status'] = 'belum';

        // Insert data ke database
        Ruang::create($validatedData);

        return redirect()->back()->with('success', 'Ruangan berhasil ditambahkan!');
    }

    public function tampilDaftarRuang()
    {
        // Mengambil data distinct gedung
        $gedungs = DB::table('ruang')->select('Gedung')->distinct()->pluck('Gedung');
        
        // Kirimkan data gedung ke view
        return view('Akademik.DaftarRuang', compact('gedungs'));
    }

}
