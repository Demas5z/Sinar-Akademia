<?php

namespace Database\Seeders;

use App\Models\Ruang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'E101',
            'Kuota' => 50,
            'Gedung' => 'E',
        ]);

        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'E102',
            'Kuota' => 50,
            'Gedung' => 'E',
        ]);
        
        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'E103',
            'Kuota' => 50,
            'Gedung' => 'E',
        ]);

        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'B101',
            'Kuota' => 50,
            'Gedung' => 'B',
        ]);

        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'B102',
            'Kuota' => 50,
            'Gedung' => 'B',
        ]);

        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'B103',
            'Kuota' => 50,
            'Gedung' => 'B',
        ]);

        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'B104',
            'Kuota' => 50,
            'Gedung' => 'B',
        ]);


        
        
        
        
    }
}
