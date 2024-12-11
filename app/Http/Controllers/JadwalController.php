<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use App\Models\Jadwal;  
use App\Models\MataKuliah;  
use App\Models\Ruang;  
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Log;  
use Carbon\Carbon;  

class JadwalController extends Controller  
{  
    public function showScheduleForm()  
    {  
        $mataKuliah = MataKuliah::all();  
        return view('kaprodi.jadwal', compact('mataKuliah'));  
    }  

    public function getRuangan()  
    {  
        $ruangan = Ruang::all();  
        return response()->json($ruangan);  
    }  

    public function storeJadwal(Request $request)  
    {  
        try {  
            $validatedSchedule = $request->validate([  
                'schedule' => 'required|array',  
                'schedule.*.courseId' => 'required',   
                'schedule.*.day' => 'required|in:senin,selasa,rabu,kamis,jumat',  
                'schedule.*.waktuMulai' => 'required|date_format:H:i',  
                'schedule.*.waktuSelesai' => 'required|date_format:H:i',  
                'schedule.*.room' => 'required'  
            ]);  

            DB::beginTransaction();  

            $kodeMks = collect($validatedSchedule['schedule'])->pluck('courseId')->unique();  
            Jadwal::whereIn('kode_mk', $kodeMks)->delete();  

            $jadwalEntries = [];  
            foreach ($validatedSchedule['schedule'] as $scheduleItem) {  
                $waktuMulai = Carbon::parse($scheduleItem['waktuMulai'])->format('H:i');  
                $waktuSelesai = Carbon::parse($scheduleItem['waktuSelesai'])->format('H:i[');  

                $jadwalEntries[] = Jadwal::create([  
                    'kode_mk' => $scheduleItem['courseId'],  
                    'hari' => strtoupper($scheduleItem['day']),  
                    'waktu_mulai' => $waktuMulai,  
                    'waktu_selesai' => $waktuSelesai,  
                    'ruangan' => $scheduleItem['room']  
                ]);  
            }  

            DB::commit();  

            return response()->json([  
                'message' => 'Jadwal berhasil disimpan',  
                'jadwal' => $jadwalEntries  
            ], 200);  

        } catch (\Exception $e) {  
            DB::rollBack();  

            Log::error('Error menyimpan jadwal: ' . $e->getMessage());  
            Log::error('Request data: ' . json_encode($request->all()));  

            return response()->json([  
                'message' => 'Gagal menyimpan jadwal',  
                'error' => $e->getMessage()  
            ], 500);  
        }  
    }  
}  