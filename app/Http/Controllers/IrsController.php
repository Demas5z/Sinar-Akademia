<?php

namespace App\Http\Controllers;

use App\Models\Irs;
use App\Models\Mahasiswa; // Assuming Mahasiswa model exists
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class IrsController extends Controller
{
    /**
     * Display the IRS creation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();

        return view('irs.create', compact('mahasiswa'));
    }

    /**
     * Store a newly created IRS in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'semester' => 'required|integer|min:1|max:8',
            'tahun_ajaran' => 'required', // Adjust validation based on data type
            'mata_kuliah' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();
        $selectedCourses = $request->input('mata_kuliah');

        $irs = new Irs;
        $irs->mahasiswa_id = $mahasiswa->id;
        $irs->semester = $request->semester;
        $irs->tahun_ajaran = $request->tahun_ajaran;
        $irs->mata_kuliah = $selectedCourses;
        $irs->save();

        return redirect()->route('irs.index')->with('success', 'IRS berhasil dibuat!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();
        $irs = Irs::where('mahasiswa_id', $mahasiswa->id)->get();

        return view('irs.index', compact(' '));

    }
}


