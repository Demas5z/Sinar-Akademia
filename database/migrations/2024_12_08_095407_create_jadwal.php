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
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliah')->onDelete('cascade');
            $table->string('ruangan'); // Nama_Ruang sebagai string
            $table->enum('hari', ['senin', 'selasa', 'rabu', 'kamis', 'jumat']);
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->timestamps();

            // Membuat relasi dengan tabel ruangs (pastikan 'Nama_Ruang' adalah unik atau primary key)
            $table->foreign('ruangan')->references('Nama_Ruang')->on('ruangs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
};
