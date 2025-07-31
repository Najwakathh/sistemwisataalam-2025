<?php

namespace App\Http\Controllers;

use App\Models\PermintaanDestinasi;
use App\Jobs\ProsesPermintaanDestinasi;
use App\Http\Controllers\Controller;

class PermintaanDestinasiController extends Controller
{
    public function proses()
    {
        $permintaan = PermintaanDestinasi::where('status', 'menunggu')
                         ->orderBy('created_at')
                         ->first();

        if ($permintaan) {
            $permintaan->update(['status' => 'diproses']);
            PermintaanDestinasi::dispatch($permintaan);
            return response()->json(['message' => 'Permintaan sedang diproses']);
        }

        return response()->json(['message' => 'Tidak ada permintaan dalam antrian']);
    }
}
