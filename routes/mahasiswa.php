<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SesiController;

// Route untuk mahasiswa
Route::get('/academic-status', function () {
    return view('mahasiswa.academic_status');
})->name('academic.status');
Route::get('/akademik', function () {
    return view('mahasiswa.akademik');
})->name('akademik');
Route::get('/buat-irs', function () {
    return view('mahasiswa.buat_irs');
})->name('buat.irs');
Route::get('/irs-view', function () {
    return view('mahasiswa.irs_view');
})->name('irs.view');


Route::get('/dashboard', [MahasiswaController::class, 'showProfile'])->name('dashboard');
Route::middleware(['auth'])->get('/dashboard', [MahasiswaController::class, 'showProfile'])->name('dashboard');
