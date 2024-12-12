<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use Illuminate\Support\Facades\DB;


class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwals')->insert(
            [
                'mata_kuliah_id' => 'PAIK101', 
                'ruangan' => 'Ruang 101', 
                'hari' => 'Senin',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '10:00:00',
            ],
            [
                'mata_kuliah_id' => 'MATE102',
                'ruangan' => 'Ruang 102',
                'hari' => 'Selasa',
                'waktu_mulai' => '10:00:00',
                'waktu_selesai' => '12:00:00',
            ],
            [
                'mata_kuliah_id' => 'BIO103',
                'ruangan' => 'Ruang 103',
                'hari' => 'Rabu',
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
            ],
            [
                'mata_kuliah_id' => 'CHEM104',
                'ruangan' => 'Ruang 104',
                'hari' => 'Kamis',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '10:00:00',
            ],
            [
                'mata_kuliah_id' => 'PHYS105',
                'ruangan' => 'Ruang 105',
                'hari' => 'Jumat',
                'waktu_mulai' => '10:00:00',
                'waktu_selesai' => '12:00:00',
            ],
            [
                'mata_kuliah_id' => 'HIST106',
                'ruangan' => 'Ruang 106',
                'hari' => 'Sabtu',
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
            ],
            [
                'mata_kuliah_id' => 'GEO107',
                'ruangan' => 'Ruang 107',
                'hari' => 'Senin',
                'waktu_mulai' => '15:00:00',
                'waktu_selesai' => '17:00:00',
            ],
            [
                'mata_kuliah_id' => 'ENG108',
                'ruangan' => 'Ruang 108',
                'hari' => 'Selasa',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '10:00:00',
            ],
            [
                'mata_kuliah_id' => 'ART109',
                'ruangan' => 'Ruang 109',
                'hari' => 'Rabu',
                'waktu_mulai' => '10:00:00',
                'waktu_selesai' => '12:00:00',
            ],
            [
                'mata_kuliah_id' => 'MUS110',
                'ruangan' => 'Ruang 110',
                'hari' => 'Kamis',
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
            ],
            [
                'mata_kuliah_id' => 'PE111',
                'ruangan' => 'Ruang 111',
                'hari' => 'Jumat',
                'waktu_mulai' => '08:00:00',
                'waktu_selesai' => '10:00:00',
            ],
            [
                'mata_kuliah_id' => 'PSY112',
                'ruangan' => 'Ruang 112',
                'hari' => 'Sabtu',
                'waktu_mulai' => '10:00:00',
                'waktu_selesai' => '12:00:00',
            ],
            [
                'mata_kuliah_id' => 'LAW113',
                'ruangan' => 'Ruang 113',
                'hari' => 'Senin',
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
            ]
        );
    }
}
