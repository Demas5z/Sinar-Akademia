<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\JadwalController;

//Route untuk kaprodi
Route::get('/jadwal', [JadwalController::class, 'showScheduleForm'])->name('kaprodi.jadwal');
Route::get('/get-ruang', [JadwalController::class, 'getRuang'])->name('get.ruang');
Route::post('/save-schedule', [JadwalController::class, 'saveSchedule']);

Route::get('/kaprodi/dashboard', function () {
    return view('kaprodi.dashboard');
})->name('kaprodi.dashboard');

Route::get('/verifikasi', function () {
    return view('kaprodi.verifikasi');
})->name('kaprodi.verifikasi');


