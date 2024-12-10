<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mk',
        'ruangan',
        'hari',
        'waktu_mulai',
        'waktu_selesai'
    ];
    public function getKelasLabelsAttribute()  
    {  
        $labels = [];  
        $jumlahKelas = $this->jumlah_kelas ?? 1;  

        for ($i = 0; $i < $jumlahKelas; $i++) {  
            $label = 'Kelas ' . chr(65 + $i); // 65 adalah kode ASCII untuk 'A'  
            $labels[] = $label;  
        }  

        return $labels;  
    }  

    // Relasi dengan MataKuliah
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class,'kode_mk', 'kode_mk');
    }

    // Relasi dengan Ruangs
    public function ruangan()
    {
        return $this->belongsTo(Ruang::class, 'ruangan', 'Nama_Ruang');
    }
}
