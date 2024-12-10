<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk', 10)->unique();
            $table->string('nama_mk');
            $table->integer('plot_semester');
            $table->integer('sks');
            $table->enum('sifat', ['W', 'P']);
            $table->integer('jumlah_kelas');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }    

};
