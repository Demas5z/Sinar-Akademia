<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;

Route::get('/', [SesiController::class, 'index'])->name('login');
Route::post('/', [SesiController::class, 'login']);
Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login']);
Route::get('/logout', [SesiController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [SesiController::class, 'dashboard'])->name('dashboard');

// Route untuk mahasiswa
Route::get('/academic-status', function () {
    return view('mahasiswa.academic_status');
})->name('academic.status');
Route::get('/akademik', function () {
    return view('mahasiswa.akademik');
})->name('akademik');