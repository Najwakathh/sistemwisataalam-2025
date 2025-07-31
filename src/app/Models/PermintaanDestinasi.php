<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermintaanDestinasi extends Model
{
    protected $table = 'permintaan_destinasi';

    protected $fillable = [
        'nama_user',
        'lokasi_preferensi',
        'kategori_wisata',
        'catatan_opsional',
        'status',
    ];
}
