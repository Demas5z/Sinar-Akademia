<?php
namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class BagianAkademik extends Controller
{
    // Menampilkan daftar ruang
    public function daftarRuang()
    {
        // Mengambil semua data ruang dari database
        $ruangs = Ruang::all();

        return view('Akademik.DaftarRuang', compact('ruangs'));
    }


    // Menampilkan form untuk membuat daftar ruang
    public function buatDaftarRuang()
    {
        return view('Akademik.BuatDaftarRuang');
    }

    // Menambahkan ruang ke dalam database
    public function createRuang(Request $request)  
    {  
        $validated = $request->validate([  
            'Nama_Ruang' => 'required|string|max:255|unique:ruangs,Nama_Ruang',  
            'Kuota' => 'required|integer',  
            'Prodi' => 'required|string|max:255',  
        ]);  
    
        $ruangs = Ruang::create([  
            'Nama_Ruang' => $validated['Nama_Ruang'],  
            'Kuota' => $validated['Kuota'],  
            'Prodi' => $validated['Prodi'],  
            'Status' => 'belum', // default status  
        ]);  
    
        // Kembalikan response sukses dalam format JSON  
        return response()->json([  
            'success' => true,  
            'message' => 'Ruangan berhasil ditambahkan!',  
            'data' => $ruangs // Kembalikan data ruang yang baru ditambahkan  
        ]);  
    }

}
