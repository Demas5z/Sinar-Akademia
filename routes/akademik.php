<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagianAkademik;

// Route untuk Akademik
Route::get('/daftar-ruang', function () {
    return view('Akademik.DaftarRuang');
})->name('daftar.ruang');
Route::get('/buat-daftar-ruang', [BagianAkademik::class, 'buatDaftarRuang'])->name('buat.daftar.ruang');

Route::get('/get-ruang', [BagianAkademik::class, 'getRuang'])->name('get.ruang');


