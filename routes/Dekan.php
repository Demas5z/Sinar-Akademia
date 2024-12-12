<?php

use App\Http\Controllers\DekanController;
use Illuminate\Support\Facades\Route;


//Route untuk Dekan
Route::get('/persetujuan-dekan', function () {
    return view('Dekan.Persetujuan');
})->name('persetujuan.dekan');
Route::get('/persetujuan-jadwal-dekan', function () {
    return view('Dekan.PersetujuanJadwal');
})->name('persetujuan.jadwal.dekan');

// Route untuk menampilkan daftar ruangan yang perlu disetujui
Route::get('/persetujuan-ruang', [DekanController::class, 'tampilDaftarRuang'])->name('persetujuan.ruang');

// Route untuk menampilkan halaman persetujuan ruangan (view)
Route::get('/persetujuan-ruang-dekan', [DekanController::class, 'tampilDaftarRuang'])->name('persetujuan.ruang.dekan');

// Route untuk mendapatkan data ruang (untuk AJAX request)
Route::get('/get-ruang', [DekanController::class, 'getRuang'])->name('get.ruang');

// Route untuk memperbarui status ruang setelah disetujui
Route::post('/update-status-ruang', [DekanController::class, 'updateStatusRuang'])->name('update.status.ruang');

Route::get('/persetujuan-jadwal-dekan/informatika', [DekanController::class, 'tampilJadwalInformatika'])
    ->name('tampil.jadwal.informatika.dekan');