<?php  

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Membuat tabel irs
        Schema::create('irs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa')->onDelete('cascade');  // Relasi dengan mahasiswa
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliah')->onDelete('cascade');  // Relasi dengan mata_kuliah
            $table->enum('semester', ['Ganjil', 'Genap']);  // Semester
            $table->year('tahun_akademik');  // Tahun akademik
            $table->integer('sks');  // SKS yang diambil
            $table->enum('status', ['Aktif', 'Selesai', 'Cuti']);  // Status IRS
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('irs');
    }
};