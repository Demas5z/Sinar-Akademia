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
                'name'=>'Aris',
                'email'=>'Aris@gmail.com',
                'role'=>'PembimbingAkademik',
                'password'=>bcrypt('12345')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
