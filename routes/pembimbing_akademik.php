<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;

//Route untuk PembimbingAkademik
Route::get('/perwalian', function () {
    return view('PembimbingAkademik.perwalian');
})->name('perwalian.PembimbingAkademik');

Route::get('/verifikasiIRS', function () {
    return view('PembimbingAkademik.verifikasiIRS');
})->name('VerifikasiIRS.PembimbingAkademik');