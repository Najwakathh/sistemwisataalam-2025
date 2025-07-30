<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventAlam extends Model
{
    protected $fillable = [
        'nama_event',
        'lokasi',
        'tanggal',
        'jenis_lokasi',
        'deskripsi',
        'gambar', // opsional jika ingin upload gambar
    ];
}