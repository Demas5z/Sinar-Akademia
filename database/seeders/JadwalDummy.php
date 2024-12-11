<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            'kode_mk' => 'PAIK122',
            'hari' => 'SENIN',
            'waktu_mulai' => '08:00',
            'waktu_selesai' => '10:00',
            'ruangan' => 'E101',
        ]);
    }
}
