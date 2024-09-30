<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login'); // View untuk halaman login
})->name('login');
