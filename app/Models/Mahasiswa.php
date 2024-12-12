<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';

    protected $fillable = ['nama', 'nim', 'alamat', 'email', 'jurusan', 'tanggal_lahir'];

    // Relasi Mahasiswa ke User (one-to-one)
    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');  // Asumsi relasi berdasarkan email
    }
}
