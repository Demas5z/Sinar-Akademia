<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagianAkademik;

Route::get('/daftar-ruang', [BagianAkademik::class, 'daftarRuang'])->name('daftar.ruang');
Route::post('/create-ruang', [BagianAkademik::class, 'createRuang'])->name('create.ruang');
Route::get('/buat-daftar-ruang', [BagianAkademik::class, 'buatDaftarRuang'])->name('buat.daftar.ruang');

Route::get('/persetujuan-ruang', [BagianAkademik::class, 'tampilDaftarRuang'])->name('persetujuan.ruang');
Route::post('/update-status-ruang', [BagianAkademik::class, 'updateStatusRuang'])->name('update.status.ruang');
