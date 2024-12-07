<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DekanController extends Controller
{
    public function getRuang()
    {
        $data = DB::table('ruang')->get(); // Mengambil data dari tabel ruang
        return response()->json($data);
    }

    public function tampilDaftarRuang()
    {
        // Mengambil data distinct gedung
        $gedungs = DB::table('ruang')->select('Gedung')->distinct()->pluck('Gedung');
        
        // Kirimkan data gedung ke view
        return view('Dekan.PersetujuanRuangan', compact('gedungs'));
    }

    public function updateStatusRuang(Request $request)
    {
        $namaRuang = $request->input('Nama_Ruang');
        
        $ruang = DB::table('ruang')->where('Nama_Ruang', $namaRuang)->first();
        
        if ($ruang) {
            DB::table('ruang')
                ->where('Nama_Ruang', $namaRuang)
                ->update(['Status' => 'setuju']);
            
            return response()->json(['success' => true, 'message' => 'Status ruang berhasil diperbarui.']);
        }
        
        return response()->json(['success' => false, 'message' => 'Ruangan tidak ditemukan.']);
    }

    
}

