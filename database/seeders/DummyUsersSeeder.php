<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userData = [
            [
                'name'=>'Akademik',
                'email'=>'Akademik@gmail.com',
                'role'=>'BagianAkademik',
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


        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
