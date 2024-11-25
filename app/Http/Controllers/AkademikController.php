<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IRSController extends Controller
{
    // Halaman utama IRS - INDEX
    public function index()
    {
        // Data dummy, sesuaikan dengan data dari database Anda
        $data = [
            'nama' => 'John Doe',
            'nim' => '123456789',
            'tahun_ajaran' => '2024/2025',
            'semester' => 5,
            'ipk' => 4.00,
            'ips' => 4.00,
            'max_sks' => 24,
            'jadwal' => [
                ['waktu' => '07:00', 'hari' => 'Senin', 'mata_kuliah' => 'Pengembangan Berbasis Platform', 'ruang' => 'E101'],
                ['waktu' => '09:30', 'hari' => 'Rabu', 'mata_kuliah' => 'Komputasi Tersebar dan Paralel', 'ruang' => 'E102'],
            ],
        ];
        return view('irs.index', compact('data'));
    }

    // Halaman buat IRS
    public function create()
    {
        $mata_kuliah = [
            'Struktur Data',
            'Proyek Perangkat Lunak',
            'Algoritma Pemrograman',
            'Manajemen Basis Data',
        ];

        return view('irs.create', compact('mata_kuliah'));
    }

    // Simpan IRS yang dibuat
    public function store(Request $request)
    {
        // Simpan data IRS ke database
        // Validasi input
        $validated = $request->validate([
            'mata_kuliah' => 'required|array',
        ]);

        // Simpan logika untuk database di sini
        // Contoh:
        // IRS::create([...]);

        return redirect()->route('irs.index')->with('success', 'IRS berhasil disimpan!');
    }
}
