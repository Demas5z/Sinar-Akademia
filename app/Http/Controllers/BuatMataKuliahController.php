<?php  

namespace App\Http\Controllers;  

use App\Models\MataKuliah;  
use Illuminate\Http\Request;  

class BuatMataKuliahController extends Controller  
{  
    public function index()  
    {  
        return view('kaprodi.buatmatkul');  
    }  

    public function store(Request $request)  
    {  
        try {  
            $validatedData = $request->validate([  
                'kode_mk' => 'required|string|max:10',  
                'nama_mk' => 'required|string',  
                'plot_semester' => 'required|integer',  
                'sks' => 'required|integer',  
                'sifat' => 'required|in:W,P',  
                'jumlah_kelas' => 'required|integer'  
            ]);  

            MataKuliah::create($validatedData);  

            return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan.');  
        } catch (\Exception $e) {  
            return redirect()->route('mata-kuliah.index')->with('error', 'Terjadi kesalahan saat menyimpan mata kuliah.');  
        }  
    }  
    
    public function destroy($id)  
    {  
        try {  
            $mataKuliah = MataKuliah::findOrFail($id);  
            $mataKuliah->delete();  

            return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil dihapus.');  
        } catch (\Exception $e) {  
            return redirect()->route('mata-kuliah.index')->with('error', 'Terjadi kesalahan saat menghapus mata kuliah.');  
        }  
    }  
}