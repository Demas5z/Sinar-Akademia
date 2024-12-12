<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Hash;  

class MahasiswaSeeder extends Seeder  
{  
    public function run()  
    {  
        $data = [  
            [  
                'nim' => '24060122140160',  
                'nama' => 'Demas Haikal Azizi',  
                'email' => 'demmas@gmail.com',    
                'jurusan' => 'Informatika',  
                'alamat' => 'Jl. Merdeka No. 123, Jakarta',  
                'tanggal_lahir' => '2001-06-24', 
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
            [  
                'nim' => '24060122140177',  
                'nama' => 'Muhammad Shaquille Kana',  
                'email' => 'shaquille@gmail.com',    
                'jurusan' => 'Informatika',  
                'alamat' => 'Jl. Sudirman No. 45, Bandung', 
                'tanggal_lahir' => '2004-10-23',  
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
            [  
                'nim' => '24060122140163',  
                'nama' => 'Dimas Ambatron',  
                'email' => 'dimas@gmail.com',   
                'jurusan' => 'Informatika',  
                'alamat' => 'Jl. Pahlawan No. 67, Surabaya',  
                'tanggal_lahir' => '2001-06-21',
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
            [  
                'nim' => '24060122140164',  
                'nama' => 'Farrel Fufufafa',  
                'email' => 'farrel@gmail.com',  
                'jurusan' => 'Informatika',  
                'alamat' => 'Jl. Gatot Subroto No. 89, Medan', 
                'tanggal_lahir' => '2001-06-2',   
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
            [  
                'nim' => '24060122140165',  
                'nama' => 'King Emyu',  
                'email' => 'emyu@gmail.com',  
                'jurusan' => 'Informatika',  
                'alamat' => 'Jl. Ahmad Yani No. 34, Semarang', 
                'tanggal_lahir' => '2001-06-4',  
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
        ];  

        DB::table('mahasiswa')->insert($data);  
    }  
}