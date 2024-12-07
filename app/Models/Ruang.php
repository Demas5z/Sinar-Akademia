<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'ruang';

    // Primary key
    protected $primaryKey = 'Nama_Ruang';

    public $timestamps = false;

    // Kolom yang bisa diisi
    protected $fillable = ['Nama_Ruang', 'Kuota', 'Gedung', 'Status'];
}
