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
            'Nama_Ruang' => 'B201',
            'Kuota' => 50,
            'Gedung' => 'B',
            'Status' => 'setuju'
        ]);

        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'B202',
            'Kuota' => 50,
            'Gedung' => 'B',
            'Status' => 'setuju'
        ]);

        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'A201',
            'Kuota' => 50,
            'Gedung' => 'A',
            'Status' => 'setuju'
        ]);

        DB::table('ruang')->insert(
        [
            'Nama_Ruang' => 'A202',
            'Kuota' => 50,
            'Gedung' => 'A',
            'Status' => 'setuju'
        ]);


        
        
        
        
    }
}
