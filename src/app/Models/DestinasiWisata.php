<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinasiWisata extends Model
{
    protected $table = 'destinasi_wisatas';

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'lokasi',
        'harga_tiket',
        'jam_buka',
        'jam_tutup',
        'rating',
        'gambar',
    ];
}
