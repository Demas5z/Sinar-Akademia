<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\IRSController;


Route::get('/', [SesiController::class, 'index'])->name('login');
Route::post('/', [SesiController::class, 'login']);
Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login']);
Route::get('/logout', [SesiController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [SesiController::class, 'dashboard'])->name('dashboard');

// Masukkan rute role mahasiswa
require base_path('routes/mahasiswa.php');

// // Masukkan rute role akademik
require base_path('routes/akademik.php');

// Masukkan rute role dekan
require base_path('routes/Dekan.php');

// Masukkan rute role pembimbing akademik
require base_path('routes/pembimbing_akademik.php');

// Masukkan rute role pembimbing kaprodi
require base_path('routes/kaprodi.php');



