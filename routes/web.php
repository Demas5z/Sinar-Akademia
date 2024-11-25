<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;

Route::get('/', [SesiController::class, 'index'])->name('login');
Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login']);
Route::get('/logout', [SesiController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [SesiController::class, 'dashboard'])->name('dashboard');
