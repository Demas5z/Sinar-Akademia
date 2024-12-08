<?php  

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  

class Ruang extends Model  
{  
    protected $table = 'ruangs'; // Pastikan nama tabel benar  
    protected $primaryKey = 'Nama_Ruang';  
    public $incrementing = false;  
    
    protected $fillable = [  
        'Nama_Ruang',   
        'Kuota',   
        'Prodi',   
        'Status'  
    ];  
}