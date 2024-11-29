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
                'name'=>'Jok',
                'email'=>'Jok@gmail.com',
                'role'=>'BagianAkademik',
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Aris Sugiharto',
                'email'=>'arissugiharto@gmail.com',
                'role'=>'Kaprodi',
                'password'=>bcrypt('123')
            ],
            [
                'name'=>'Aris Puji',
                'email'=>'aris@gmail.com',
                'role'=>'PembimbingAkademik',
                'password'=>bcrypt('123')
            ]

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
