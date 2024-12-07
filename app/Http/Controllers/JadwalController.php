<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function showScheduleForm()
    {
        $ruangan = Ruang::all();

        return view('kaprodi.jadwal', compact('ruangan'));

    }
    public function getRuang()
    {
        $data = DB::table('ruang')->get(); // Mengambil data dari tabel ruang
        return response()->json($data);
    }

    public function saveSchedule(Request $request)
        {
            try {
                $scheduleData = $request->input('scheduleData');
                
                foreach ($scheduleData as $entry) {
                    Schedule::create([
                        'semesters_id' => $entry['semester'],
                        'course_id' => $entry['course_id'],
                        'sks' => $entry['sks'],
                        'Class' => $entry['class'],
                        'day' => $entry['day'],
                        'start_time' => $entry['start_time'],
                        'end_time' => $entry['end_time']
                    ]);
                }
                
                return response()->json(['message' => 'Jadwal berhasil disimpan']);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }
        }

    public function getExistingSchedules()
        {
            $schedules = Schedule::with(['course', 'semester'])->get();
            return response()->json($schedules);
        }
}