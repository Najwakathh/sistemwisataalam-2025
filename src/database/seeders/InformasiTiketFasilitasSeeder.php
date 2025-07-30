<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InformasiTiketFasilitas;

class InformasiTiketFasilitasSeeder extends Seeder
{
    public function run(): void
    {
        InformasiTiketFasilitas::create([
            'nama_tempat' => 'Gunung Bromo',
            'harga_tiket' => 30000,
            'jam_buka' => '03:00',
            'jam_tutup' => '18:00',
            'fasilitas' => 'Parkir, Toilet, Warung Makan, Jeep Wisata',
            'kontak_pengelola' => '0821-1234-5678',
        ]);

        InformasiTiketFasilitas::create([
            'nama_tempat' => 'Pantai Kuta',
            'harga_tiket' => 15000,
            'jam_buka' => '06:00',
            'jam_tutup' => '19:00',
            'fasilitas' => 'Toilet, Gazebo, Tempat Bilas, Area Kuliner',
            'kontak_pengelola' => '0361-123456',
        ]);
    }
}
