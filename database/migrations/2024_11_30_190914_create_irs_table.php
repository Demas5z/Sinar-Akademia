<?php  

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel mahasiswa
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Relasi dengan users
            $table->string('nim', 20)->unique();  // NIM mahasiswa, harus unik
            $table->string('nama', 100);
            $table->string('jurusan', 50);
            $table->string('alamat')->nullable();
            $table->string('no_telp', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Membalikkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel mahasiswa
        Schema::dropIfExists('mahasiswa');
    }
};