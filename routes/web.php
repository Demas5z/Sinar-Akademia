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

// Route untuk Akademik
Route::get('/daftar-ruang', function () {
    return view('Akademik.DaftarRuang');
})->name('daftar.ruang');
Route::get('/buat-daftar-ruang', function () {
    return view('Akademik.BuatDaftarRuang');
})->name('buat.daftar.ruang');


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

//Route untuk PembimbingAkademik
Route::get('/perwalian', function () {
    return view('PembimbingAkademik.perwalian');
})->name('perwalian.PembimbingAkademik');

Route::get('/verifikasiIRS', function () {
    return view('PembimbingAkademik.verifikasiIRS');
})->name('VerifikasiIRS.PembimbingAkademik');