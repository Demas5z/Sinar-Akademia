<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk');  // Kolom kode mata kuliah
            $table->string('ruangan');  // Kolom nama ruangan
            $table->string('hari');     // Kolom hari kuliah (Senin, Selasa, dst)
            $table->time('waktu_mulai');  // Kolom waktu mulai kuliah
            $table->time('waktu_selesai'); // Kolom waktu selesai kuliah
            $table->timestamps();
            
            // Menambahkan foreign key untuk menghubungkan kode_mk dengan tabel mata_kuliahs
            $table->foreign('kode_mk')->references('kode_mk')->on('mata_kuliah')->onDelete('cascade');
            
            // Menambahkan foreign key untuk menghubungkan nama ruangan dengan tabel ruangs
            $table->foreign('ruangan')->references('Nama_Ruang')->on('ruangs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
};
