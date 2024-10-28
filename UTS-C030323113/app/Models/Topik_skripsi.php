<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikSkripsi extends Model
{
    use HasFactory;

    protected $table = 'topik_skripsi';

    protected $fillable = [
        'mahasiswa_id', // ID Mahasiswa
        'judul',        // Judul Skripsi
        'deskripsi',    // Deskripsi Skripsi
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }
}
