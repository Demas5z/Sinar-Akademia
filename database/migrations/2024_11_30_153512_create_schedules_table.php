<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semesters_id')->constrained()->onDelete('cascade');  // Relasi dengan tabel semesters
            $table->foreignId('course_id')->constrained()->onDelete('cascade');    // Relasi dengan tabel courses
            $table->string('day');  // Hari (Senin, Selasa, dst.)
            $table->time('start_time');  // Jam Mulai
            $table->time('end_time');    // Jam Selesai
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
        Schema::dropIfExists('schedules');
    }
}
