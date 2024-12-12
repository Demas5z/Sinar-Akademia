<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate::Support\Facades\Schema;

class CreateIrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nim')->constrained('mahasiswa')->onDelete('cascade');
            $table->semester();
            $tahun_ajaran(); // Add a custom column for academic year (sesuaikan tipe data)
            $table->json('mata_kuliah'); // Store selected courses as JSON
            $table->string('status')->default('belum_disetujui'); // Default status: not approved
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('irs');
    }
}