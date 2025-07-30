<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataStatusHistory extends Model
{
    use HasFactory;

    protected $table = 'wisata_status_histories';

    protected $fillable = [
        'user_id',
        'nama_destinasi',
        'status',
        'catatan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
