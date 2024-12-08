<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    public function run()
    {
        DB::table('schedules')->insert([
            // Semester 1
            // Senin
            [
                'semester_id' => 1, // Semester 1
                'course_id' => 1,   // Matakuliah Pengantar Teknologi Informasi
                'day' => 'Senin',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            [
                'semester_id' => 1, // Semester 1
                'course_id' => 2,   // Matakuliah Aljabar Linear
                'day' => 'Senin',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
            // Selasa
            [
                'semester_id' => 1, // Semester 1
                'course_id' => 3,   // Matakuliah Bahasa Indonesia
                'day' => 'Selasa',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            [
                'semester_id' => 1, // Semester 1
                'course_id' => 4,   // Matakuliah Fisika Dasar
                'day' => 'Selasa',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
            // Rabu
            [
                'semester_id' => 1, // Semester 1
                'course_id' => 5,   // Matakuliah Struktur Data
                'day' => 'Rabu',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            // Kamis
            [
                'semester_id' => 1, // Semester 1
                'course_id' => 6,   // Matakuliah Sistem Operasi
                'day' => 'Kamis',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            // Semester 2
            // Kamis
            [
                'semester_id' => 2, // Semester 2
                'course_id' => 7,   // Matakuliah Basis Data
                'day' => 'Kamis',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
            // Jumat
            [
                'semester_id' => 2, // Semester 2
                'course_id' => 8,   // Matakuliah Pemrograman Web
                'day' => 'Jumat',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            [
                'semester_id' => 2, // Semester 2
                'course_id' => 9,   // Matakuliah Jaringan Komputer
                'day' => 'Jumat',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
            // Semester 3
            // Senin
            [
                'semester_id' => 3, // Semester 3
                'course_id' => 1,   // Matakuliah Pengantar Teknologi Informasi
                'day' => 'Senin',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            [
                'semester_id' => 3, // Semester 3
                'course_id' => 2,   // Matakuliah Aljabar Linear
                'day' => 'Senin',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
            // Selasa
            [
                'semester_id' => 3, // Semester 3
                'course_id' => 3,   // Matakuliah Bahasa Indonesia
                'day' => 'Selasa',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            // Rabu
            [
                'semester_id' => 3, // Semester 3
                'course_id' => 4,   // Matakuliah Fisika Dasar
                'day' => 'Rabu',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            // Semester 4
            // Senin
            [
                'semester_id' => 4, // Semester 4
                'course_id' => 5,   // Matakuliah Struktur Data
                'day' => 'Senin',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            [
                'semester_id' => 4, // Semester 4
                'course_id' => 6,   // Matakuliah Sistem Operasi
                'day' => 'Senin',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
            // Selasa
            [
                'semester_id' => 4, // Semester 4
                'course_id' => 7,   // Matakuliah Basis Data
                'day' => 'Selasa',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            // Semester 5
            // Senin
            [
                'semester_id' => 5, // Semester 5
                'course_id' => 8,   // Matakuliah Pemrograman Web
                'day' => 'Senin',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            [
                'semester_id' => 5, // Semester 5
                'course_id' => 9,   // Matakuliah Jaringan Komputer
                'day' => 'Senin',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
            // Semester 6
            // Selasa
            [
                'semester_id' => 6, // Semester 6
                'course_id' => 1,   // Matakuliah Pengantar Teknologi Informasi
                'day' => 'Selasa',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            [
                'semester_id' => 6, // Semester 6
                'course_id' => 2,   // Matakuliah Aljabar Linear
                'day' => 'Selasa',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
            // Semester 7
            // Senin
            [
                'semester_id' => 7, // Semester 7
                'course_id' => 3,   // Matakuliah Bahasa Indonesia
                'day' => 'Senin',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
            ],
            [
                'semester_id' => 7, // Semester 7
                'course_id' => 4,   // Matakuliah Fisika Dasar
                'day' => 'Senin',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
            ],
        ]);
    }
}
