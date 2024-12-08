<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ruangs', function (Blueprint $table) {
            // 'Nama_Ruang' sebagai primary key
            $table->string('Nama_Ruang')->primary(); 
            
            // Kolom Kuota, bisa null
            $table->integer('Kuota')->nullable(); 
            
            // Kolom Prodi menggantikan Gedung
            $table->string('Prodi')->nullable();  // Kolom untuk Program Studi
            
            // Kolom Status, dengan nilai default 'belum'
            $table->enum('Status', ['belum', 'setuju'])->default('belum'); 
            
            // Timestamps (created_at, updated_at) bisa ditambahkan jika diperlukan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangs');
    }
};
