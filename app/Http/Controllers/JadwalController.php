<?php
namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Ruang;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    // Menampilkan form jadwal dengan pencarian
    public function showScheduleForm(Request $request)
    {
        $query = MataKuliah::query();

        // Jika ada pencarian, filter berdasarkan nama_mk
        if ($request->has('search') && $request->search != '') {
            $query->where('nama_mk', 'like', '%' . $request->search . '%');
        }

        // Ambil data mata kuliah setelah filter
        $mataKuliah = $query->get();

        // Ambil data ruang yang tersedia
        $ruangs = Ruang::where('Status', 'setuju')->get();

        return view('kaprodi.jadwal', compact('mataKuliah', 'ruangs'));
    }
    public function getRuangan()
{
    $ruangs = Ruang::all();  // Mengambil semua ruangan dari database
    return response()->json($ruangs);  // Mengirimkan data ruang dalam format JSON
}

}
