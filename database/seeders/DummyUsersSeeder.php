<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Ambil semua data mahasiswa
        $mahasiswas = Mahasiswa::all();

        foreach ($mahasiswas as $mahasiswa) {
            // Membuat user berdasarkan data mahasiswa
            User::create([
                'name' => $mahasiswa->nama,  // Nama diambil dari mahasiswa
                'email' => $mahasiswa->email,  // Email diambil dari mahasiswa
                'password' => bcrypt('password123'),  // Password default
                'role' => 'Mahasiswa',  // Role diatur sebagai Mahasiswa
            ]);
        }

        $userData = [
            [
                'name'=>'Akademik',
                'email'=>'Akademik@gmail.com',
                'role'=>'BagianAkademik',
                'password'=>bcrypt('123'),
            ],
            [
                'name'=>'Shafi',
                'email'=>'Shafi@gmail.com',
                'role'=>'Mahasiswa',
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Aris Sugiharto',
                'email'=>'arissugiharto@gmail.com',
                'role'=>'Kaprodi',
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Dosen',
                'email'=>'Dosen@gmail.com',
                'role'=>'PembimbingAkademik',
                'password'=>bcrypt('123')
            ],

            [
                'name'=>'Dekan',
                'email'=>'Dekan@gmail.com',
                'role'=>'Dekan',
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Mahasiswa',
                'email'=>'Mahasiswa@gmail.com',
                'role'=>'Mahasiswa',
                'password'=>bcrypt('123')
            ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
