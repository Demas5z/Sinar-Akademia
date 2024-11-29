<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;

//Route untuk kaprodi
Route::get('/jadwal', function () {
    return view('kaprodi.jadwal');
})->name('kaprodi.jadwal');