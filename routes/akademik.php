<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagianAkademik;

// Route untuk Akademik

Route::get('/daftar-ruang', [BagianAkademik::class, 'tampilDaftarRuang'])->name('daftar.ruang');

Route::get('/buat-daftar-ruang', [BagianAkademik::class, 'buatDaftarRuang'])->name('buat.daftar.ruang');

Route::get('/get-ruang', [BagianAkademik::class, 'getRuang'])->name('get.ruang');

Route::post('/create-ruang', [BagianAkademik::class, 'createRuang'])->name('create.ruang');

