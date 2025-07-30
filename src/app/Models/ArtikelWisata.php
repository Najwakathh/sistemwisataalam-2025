<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelWisata extends Model
{
    protected $table = 'artikel_wisata';

    protected $fillable = [
        'judul',
        'konten',
        'kategori',
        'penulis',
        'tanggal',
    ];
}