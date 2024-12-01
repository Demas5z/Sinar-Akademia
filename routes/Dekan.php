<?php

use App\Http\Controllers\DekanController;
use Illuminate\Support\Facades\Route;


//Route untuk Dekan
Route::get('/persetujuan-dekan', function () {
    return view('Dekan.Persetujuan');
})->name('persetujuan.dekan');
Route::get('/persetujuan-jadwal-dekan', function () {
    return view('Dekan.PersetujuanJadwal');
})->name('persetujuan.jadwal.dekan');
Route::get('/persetujuan-ruang-dekan', function () {
    return view('Dekan.PersetujuanRuangan');
})->name('persetujuan.ruang.dekan');