<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_kuliah_id',
        'ruangan',
        'hari',
        'waktu_mulai',
        'waktu_selesai'
    ];

    // Relasi dengan MataKuliah
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class,'kode_mk');
    }

    // Relasi dengan Ruangs
    public function ruangan()
    {
        return $this->belongsTo(Ruang::class, 'ruangan', 'Nama_Ruang');
    }
}
