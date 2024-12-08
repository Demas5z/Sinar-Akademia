<?php  

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  

class Ruang extends Model  
{  
    use HasFactory;

    protected $table = 'ruangs';

    protected $primaryKey = 'Nama_Ruang'; // Menetapkan Nama_Ruang sebagai primary key

    protected $fillable = ['Nama_Ruang', 'Kuota', 'Prodi', 'Status'];

    public $incrementing = false; // Karena primary key bukan auto-increment

    // Relasi dengan tabel jadwal
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'ruangan', 'Nama_Ruang');
    }
}