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

// Masukkan rute role mahasiswa
require base_path('routes/mahasiswa.php');

// // Masukkan rute role akademik
require base_path('routes/akademik.php');

// Masukkan rute role dekan
require base_path('routes/Dekan.php');

<<<<<<< HEAD
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
=======
// Masukkan rute role pembimbing akademik
require base_path('routes/pembimbing_akademik.php');

// Masukkan rute role pembimbing kaprodi
require base_path('routes/kaprodi.php');
>>>>>>> 7f5bee2186927d21197a5ebe5ac269e12e323704
