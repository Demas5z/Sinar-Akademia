<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswa extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel mahasiswa.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nama'); // Kolom nama
            $table->string('nim', 20)->primary(); // Kolom nim dengan panjang 20 dan unik
            $table->text('alamat')->nullable(); // Kolom alamat yang bisa kosong
            $table->string('jurusan', 100)->nullable(); // Kolom jurusan yang bisa kosong
            $table->string('email', 100)->unique()->nullable(); // Kolom email yang unik dan bisa kosong
            $table->date('tanggal_lahir')->nullable(); // Kolom tanggal lahir yang bisa kosong
            $table->timestamps(0); // Kolom created_at dan updated_at (default menggunakan timestamp)
        });
    }
    

    /**
     * Balikkan perubahan yang dilakukan di metode up.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
}
