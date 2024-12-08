<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Validator;

class MataKuliahController extends Controller
{
    // Fungsi untuk menyimpan mata kuliah
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'kode_mk' => 'required|string|max:10|unique:mata_kuliah,kode_mk', // Menambahkan validasi unik untuk kode mata kuliah
            'nama_mk' => 'required|string|max:255', // Menambahkan panjang maksimum
            'plot_semester' => 'required|integer|min:1|max:8', // Validasi rentang semester
            'sks' => 'required|integer|min:1|max:6', // Menambahkan batasan SKS (misalnya 1-6)
            'sifat' => 'required|in:W,P', // Hanya W atau P
            'jumlah_kelas' => 'required|integer|min:1|max:10', // Mengatur batasan jumlah kelas
        ]);

        // Jika validasi gagal, kembalikan response error
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()], 400);
        }

        // Simpan mata kuliah ke dalam database
        try {
            // Menggunakan create() untuk menyimpan data lebih ringkas
            $mataKuliah = MataKuliah::create([
                'kode_mk' => $request->kode_mk,
                'nama_mk' => $request->nama_mk,
                'plot_semester' => $request->plot_semester,
                'sks' => $request->sks,
                'sifat' => $request->sifat,
                'jumlah_kelas' => $request->jumlah_kelas,
            ]);

            // Mengembalikan response sukses dengan data yang baru disimpan
            return redirect()->route('mata-kuliah.index')->with(['success' => true, 'Mata kuliah berhasil disimpan!']);

        } catch (\Exception $e) {
            // Jika terjadi error saat menyimpan, tangani error dan beri pesan
            return redirect()->route('mata-kuliah.index')->with(['success' => false, 'Mata kuliah tidak berhasil disimpan!', $e->getMessage()], 500);
        }
    }
}
