<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     *
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semesters_id')->constrained()->onDelete('cascade');  // Relasi dengan tabel semesters
            $table->foreignId('course_id')->constrained()->onDelete('cascade');    // Relasi dengan tabel courses
            $table->integer('sks');
            $table->enum('Class', ['A', 'B', 'C', 'D', 'E']);
            $table->string('day');  // Hari (Senin, Selasa, dst.)
            $table->time('start_time');  // Jam Mulai
            $table->time('end_time');    // Jam Selesai
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};