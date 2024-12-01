<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

return new class extends Migration  
{  
    public function up()  
    {  
        Schema::create('mahasiswa', function (Blueprint $table) {  
            $table->id();  
            $table->string('nim', 20);  
            $table->string('nama', 100);  
            $table->string('email')->unique();  
            $table->string('password');  // Kolom password ditambahkan di sini  
            $table->string('jurusan', 50);  
            $table->string('alamat')->nullable();  
            $table->string('no_telp', 15)->nullable();  
            $table->timestamps();  
        });  
    }  

    public function down()  
    {  
        Schema::dropIfExists('mahasiswa');  
    }  
};