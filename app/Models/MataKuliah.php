<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $fillable = ['kode_mk', 'nama_mk', 'plot_semester', 'sks', 'sifat', 'jumlah_kelas'];

    // Accessor untuk kelasLabels
    public function getKelasLabelsAttribute()
    {
        $kelasLabels = [];
        for ($i = 0; $i < $this->jumlah_kelas; $i++) {
            $kelasLabels[] = $this->nama_mk . ' ' . chr(65 + $i); // chr(65) = 'A', chr(66) = 'B', dst.
        }

        return $kelasLabels;
    }

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'kode_mk', 'kode_mk');
    }
}
