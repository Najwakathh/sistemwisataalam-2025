<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AksesTransportasi extends Model
{
    protected $table = 'akses_transportasi';

    protected $fillable = [
        'nama_tempat',
        'rute',
        'jenis_kendaraan',
        'informasi_sewa',
    ];
}
