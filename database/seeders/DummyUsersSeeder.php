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
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Kaprodi',
                'email'=>'Kaprodi@gmail.com',
                'role'=>'Kaprodi',
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Dosen',
                'email'=>'Dosen@gmail.com',
                'role'=>'PembimbingAkademik',
                'password'=>bcrypt('123')
            ],
<<<<<<< HEAD
            [
                'name'=>'Rusdi',
                'email'=>'rusdi@gmail.com',
                'role'=>'Mahasiswa',
                'password'=>bcrypt('123')
            ]
=======

>>>>>>> 614d6c129238882cc47908b37b7540bdf86d84d7

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
