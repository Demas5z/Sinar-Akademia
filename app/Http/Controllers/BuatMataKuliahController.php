<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class BuatMataKuliahController extends Controller
{
    public function index()
    {
        return view('kaprodi.buatjadwal');
    }

    public function store(Request $request)
    {
        try {
            // Validate the input data
            $validatedData = $request->validate([
                'kode_mk' => 'required|string|max:10',
                'nama_mk' => 'required|string',
                'plot_semester' => 'required|integer',
                'sks' => 'required|integer',
                'sifat' => 'required|in:W,P',
                'jumlah_kelas' => 'required|integer'
            ]);

            // Create a new MataKuliah instance and save it to the database
            $mataKuliah = new MataKuliah();
            $mataKuliah->kode_mk = $validatedData['kode_mk'];
            $mataKuliah->nama_mk = $validatedData['nama_mk'];
            $mataKuliah->plot_semester = $validatedData['plot_semester'];
            $mataKuliah->sks = $validatedData['sks'];
            $mataKuliah->sifat = $validatedData['sifat'];
            $mataKuliah->jumlah_kelas = $validatedData['jumlah_kelas'];
            $mataKuliah->save();

            // Redirect or return a response
            return redirect()->route('kaprodi.buatjadwal', ['mataKuliah' => $mataKuliah])->with('success', 'Mata kuliah berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Log the error or display an error message to the user
            return redirect()->route('kaprodi.buatjadwal')->with('error', 'Terjadi kesalahan saat menyimpan mata kuliah.');
        }
    }
    
    public function destroy($id)
    {
        try {
            $mataKuliah = MataKuliah::findOrFail($id);
            $mataKuliah->delete();

            return redirect()->route('kaprodi.buatjadwal')->with('success', 'Mata kuliah berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('kaprodi.buatjadwal')->with('error', 'Terjadi kesalahan saat menghapus mata kuliah.');
        }
    }
}