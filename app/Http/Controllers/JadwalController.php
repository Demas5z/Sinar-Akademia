<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Ruang;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function showScheduleForm()
    {
        // Mengambil semua mata kuliah dari database beserta jumlah kelasnya
        $mataKuliah = MataKuliah::orderBy('nama_mk')->get(['id', 'nama_mk', 'jumlah_kelas']);

        // Mengambil data ruangan yang statusnya 'setuju'
        $ruangan = Ruang::where('Status', 'setuju')->get(['Nama_Ruang']);
        
        // Mengirim data mata kuliah dan ruangan ke view
        return view('kaprodi.jadwal', compact('mataKuliah', 'ruangan'));
    }
}
