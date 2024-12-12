<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Log;

class DekanController extends Controller
{
    // Menampilkan daftar ruangan yang perlu disetujui oleh dekan
    public function tampilDaftarRuang()
    {
        $ruangs = Ruang::where('Status', 'belum')->get(); // Ambil ruang yang statusnya 'belum'
        return view('Dekan.PersetujuanRuangan', compact('ruangs')); // Kirim data ke view dengan nama $ruangs
    }

    // Mengupdate status ruangan menjadi 'setuju'
    public function updateStatusRuang(Request $request)
    {
        // Validasi input
        $request->validate([
            'Nama_Ruang' => 'required|string'
        ]);

        // Cari ruang berdasarkan Nama_Ruang (sesuai dengan kolom di database)
        $ruang = Ruang::where('Nama_Ruang', $request->Nama_Ruang)->first();

        if (!$ruang) {
            return response()->json(['status' => 'error', 'message' => 'Ruang tidak ditemukan.'], 404);
        }

        // Pastikan ruang belum disetujui
        if ($ruang->Status !== 'belum') {
            return response()->json(['status' => 'error', 'message' => 'Ruang sudah disetujui sebelumnya.'], 400);
        }

        // Perbarui status ruang menjadi 'setuju'
        $ruang->Status = 'setuju';
        $ruang->save();

        // Kirim respons sukses
        return response()->json(['status' => 'success', 'message' => 'Ruang berhasil disetujui.']);
    }

    public function tampilJadwalInformatika()
    {
        // Debug: Cetak semua jadwal
        $jadwals = Jadwal::with(['mataKuliah', 'ruangan'])
            ->get();
        
        //dd($jadwals); // Ini akan menghentikan eksekusi dan menampilkan semua data jadwal
    
        $jadwalsGrouped = $jadwals->groupBy('hari');
    
        return view('Dekan.TampilJadwal', compact('jadwals'));
    }
}