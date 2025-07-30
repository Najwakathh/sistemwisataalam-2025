<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UlasanPengunjung extends Model
{
    protected $table = 'ulasan_pengunjung';

    protected $fillable = [
        'nama_pengunjung',
        'destinasi_wisata', // nama destinasi disimpan langsung
        'rating',
        'komentar',
    ];
}
