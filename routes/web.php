<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login'); // View untuk halaman login
// })->name('login');

// Route::get('/dashboardPA', function () {
//     return view('dashboardPA'); // View untuk halaman login
// })->name('dashboardPA');

Route::get('/', [SesiController::class, 'index'])->name('index');
Route::post('/', [SesiController::class, 'login'])->name('login');

Route::get('/dashboard', [AdminController::class, 'index'])->name('proses');