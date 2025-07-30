<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiTiketFasilitas extends Model
{
    protected $table = 'informasi_tiket_fasilitas';

    protected $fillable = [
        'nama_tempat',
        'harga_tiket',
        'jam_buka',
        'jam_tutup',
        'fasilitas',
        'kontak_pengelola',
    ];
}
