<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;

// Route untuk Akademik
Route::get('/daftar-ruang', function () {
    return view('Akademik.DaftarRuang');
})->name('daftar.ruang');
Route::get('/buat-daftar-ruang', function () {
    return view('Akademik.BuatDaftarRuang');
})->name('buat.daftar.ruang');