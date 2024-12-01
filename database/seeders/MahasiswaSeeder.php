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
                'nama' => 'Rusdi Haikal Azizi',  
                'email' => 'demmas@gmail.com',  
                'password' => Hash::make('123'),  // Password di-hash  
                'jurusan' => 'Teknik Informatika',  
                'alamat' => 'Jl. Merdeka No. 123, Jakarta',  
                'no_telp' => '081234567890',  
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
            [  
                'nim' => '24060122140161',  
                'nama' => 'Muhammad Shaquille SiImut',  
                'email' => 'shaquille@gmail.com',  
                'password' => Hash::make('123'),  
                'jurusan' => 'Sistem Informasi',  
                'alamat' => 'Jl. Sudirman No. 45, Bandung',  
                'no_telp' => '082345678901',  
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
            [  
                'nim' => '24060122140163',  
                'nama' => 'Dimas Ambatron',  
                'email' => 'dimas@gmail.com',  
                'password' => Hash::make('123'),  
                'jurusan' => 'Teknik Komputer',  
                'alamat' => 'Jl. Pahlawan No. 67, Surabaya',  
                'no_telp' => '083456789012',  
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
            [  
                'nim' => '24060122140164',  
                'nama' => 'Farrel Fufufafa',  
                'email' => 'farrel@gmail.com',  
                'password' => Hash::make('123'),  
                'jurusan' => 'Teknik Informatika',  
                'alamat' => 'Jl. Gatot Subroto No. 89, Medan',  
                'no_telp' => '084567890123',  
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
            [  
                'nim' => '24060122140165',  
                'nama' => 'King Emyu',  
                'email' => 'emyu@gmail.com',  
                'password' => Hash::make('123'),  
                'jurusan' => 'Sistem Informasi',  
                'alamat' => 'Jl. Ahmad Yani No. 34, Semarang',  
                'no_telp' => '085678901234',  
                'created_at' => now(),  
                'updated_at' => now()  
            ],  
        ];  

        DB::table('mahasiswa')->insert($data);  
    }  
}