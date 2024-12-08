<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\SesiController;  
use App\Http\Controllers\JadwalController;  
use App\Http\Controllers\BuatMataKuliahController;  
use App\Http\Controllers\MataKuliahController;

// Dashboard Route  
Route::get('/kaprodi/dashboard', function () {  
    return view('kaprodi.dashboard');  
})->name('kaprodi.dashboard');  

Route::get('/kaprodi/buatmatkul', function () {  
    return view('kaprodi.buatmatkul');  
})->name('kaprodi.buatmatkul'); 

// Mata Kuliah Routes  
Route::get('/mata-kuliah', [BuatMataKuliahController::class, 'index'])->name('mata-kuliah.index');  
Route::post('/mata-kuliah', [BuatMataKuliahController::class, 'store'])->name('store-mata-kuliah');  
Route::delete('/mata-kuliah/{id}', [BuatMataKuliahController::class, 'destroy'])->name('mata-kuliah.destroy');   

// Jadwal Routes  
Route::get('/kaprodi/jadwal', [JadwalController::class, 'showScheduleForm'])->name('kaprodi.jadwal');  
Route::get('/kaprodi/mata-kuliah/{semester}', [JadwalController::class, 'getMataKuliahBySemester']);  
Route::get('/kaprodi/ruang', [JadwalController::class, 'getRuang']);

Route::post('/store-jadwal', [JadwalController::class, 'store'])->name('store-jadwal');
Route::get('/jadwal/create', [JadwalController::class, 'showScheduleForm'])->name('jadwal.create');

// Route untuk menampilkan form jadwal
Route::get('jadwal', [JadwalController::class, 'showScheduleForm'])->name('show-jadwal');

// Route untuk menyimpan jadwal
Route::post('jadwal', [JadwalController::class, 'store'])->name('store-jadwal');

Route::get('/jadwal', [JadwalController::class, 'showScheduleForm'])->name('jadwal.showForm');

Route::get('/ruangan', [JadwalController::class, 'getRuangan']);



// Untuk route biasa
Route::post('/store-mata-kuliah', [MataKuliahController::class, 'store'])->name('store-mata-kuliah');
