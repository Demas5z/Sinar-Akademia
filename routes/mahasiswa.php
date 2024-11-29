<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;

// Route untuk mahasiswa
Route::get('/academic-status', function () {
    return view('mahasiswa.academic_status');
})->name('academic.status');
Route::get('/akademik', function () {
    return view('mahasiswa.akademik');
})->name('akademik');