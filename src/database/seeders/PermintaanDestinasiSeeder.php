<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermintaanDestinasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('permintaan_destinasi')->insert([
            [
                'nama_user' => 'Najwa Kathrenia',
                'lokasi_preferensi' => 'Sumatera Barat',
                'kategori_wisata' => 'Gunung',
                'catatan_opsional' => 'Cari tempat yang sejuk dan cocok untuk hiking',
                'status' => 'menunggu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_user' => 'Arya Wulan',
                'lokasi_preferensi' => 'Bali',
                'kategori_wisata' => 'Pantai',
                'catatan_opsional' => 'Butuh saran untuk liburan akhir tahun',
                'status' => 'menunggu',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
