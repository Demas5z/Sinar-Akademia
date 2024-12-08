<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\SesiController;  
use App\Http\Controllers\JadwalController;  
use App\Http\Controllers\BuatMataKuliahController;  

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