<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AksesTransportasi;

class AksesTransportasiSeeder extends Seeder
{
    public function run(): void
    {
        AksesTransportasi::create([
            'nama_tempat' => 'Gunung Bromo',
            'rute' => 'Malang → Tumpang → Cemoro Lawang',
            'jenis_kendaraan' => 'Jeep, Motor',
            'informasi_sewa' => 'Sewa jeep mulai Rp500.000. Kontak: 0812-3456-7890',
        ]);

        AksesTransportasi::create([
            'nama_tempat' => 'Pantai Kuta',
            'rute' => 'Bandara Ngurah Rai → Jalan Raya Kuta → Pantai Kuta',
            'jenis_kendaraan' => 'Mobil, Taksi Online',
            'informasi_sewa' => 'Sewa mobil harian Rp350.000. Kontak: 0857-1234-5678',
        ]);

        AksesTransportasi::create([
            'nama_tempat' => 'Air Terjun Tumpak Sewu',
            'rute' => 'Lumajang → Pronojiwo → Air Terjun',
            'jenis_kendaraan' => 'Motor, Mobil',
            'informasi_sewa' => 'Motor Rp100.000/hari. Info: 0821-9876-4321',
        ]);
    }
}
