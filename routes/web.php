<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicStatusController;
use App\Http\Controllers\IRSController;


// Route::get('/', function () {
//     return view('login'); // View untuk halaman login
// })->name('login');

Route::get('/dashboardM', function () {
    return view('dashboardM'); // View untuk halaman login
})->name('dashboardPA');

Route::get('/', [SesiController::class, 'index'])->name('index');
Route::post('/', [SesiController::class, 'login'])->name('login');

Route::get('/dashboard', [AdminController::class, 'index'])->name('proses');
Route::get('/mhs', [AdminController::class, 'index'])->name('pros');

Route::get('/academic-status', [AcademicStatusController::class, 'index'])->name('academic.status');

Route::get('/irs-index', [IRSController::class, 'index'])->name('irs.index');
Route::get('/irs/create', [IRSController::class, 'create'])->name('irs.create');
Route::post('/irs/store', [IRSController::class, 'store'])->name('irs.store');


