<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BuatMataKuliahController;


Route::get('/kaprodi/dashboard', function () {
    return view('kaprodi.dashboard');
})->name('kaprodi.dashboard');

Route::get('/kaprodi/buatmatkul', function () {
    return view('kaprodi.buatmatkul');
})->name('kaprodi.buatmatkul');



// Menampilkan form jadwal
Route::get('/kaprodi/jadwal', [JadwalController::class, 'showScheduleForm'])->name('kaprodi.jadwal');

// Mengambil mata kuliah berdasarkan semester
Route::get('/kaprodi/mata-kuliah/{semester}', [JadwalController::class, 'getMataKuliahBySemester']);

// Mengambil data ruangan
Route::get('/kaprodi/ruang', [JadwalController::class, 'getRuang']);

// Mengambil semua data ruangan
Route::get('/ruang', [JadwalController::class, 'getRuang'])->name('ruang');

