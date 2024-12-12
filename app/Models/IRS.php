<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Irs extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'semester',
        'tahun_ajaran',
        'mata_kuliah',
        'status'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}