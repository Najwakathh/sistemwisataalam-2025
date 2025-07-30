<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DestinasiWisata;

class DestinasiWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DestinasiWisata::create([
            'nama' => 'Gunung Bromo',
            'kategori' => 'Gunung',
            'deskripsi' => 'Gunung Bromo merupakan gunung berapi aktif dan bagian dari Taman Nasional Bromo Tengger Semeru.',
            'lokasi' => 'Jawa Timur',
            'harga_tiket' => 50000,
            'jam_buka' => '05:00',
            'jam_tutup' => '17:00',
            'rating' => 4.8,
            'gambar' => null,
        ]);

        DestinasiWisata::create([
            'nama' => 'Pantai Kuta',
            'kategori' => 'Pantai',
            'deskripsi' => 'Pantai Kuta terkenal dengan pasir putih dan sunset yang indah, salah satu ikon wisata Bali.',
            'lokasi' => 'Bali',
            'harga_tiket' => 20000,
            'jam_buka' => '06:00',
            'jam_tutup' => '18:00',
            'rating' => 4.6,
            'gambar' => null,
        ]);

        DestinasiWisata::create([
            'nama' => 'Air Terjun Tumpak Sewu',
            'kategori' => 'Air Terjun',
            'deskripsi' => 'Air Terjun Tumpak Sewu dikenal sebagai Niagara-nya Indonesia dengan panorama spektakuler.',
            'lokasi' => 'Lumajang, Jawa Timur',
            'harga_tiket' => 25000,
            'jam_buka' => '07:00',
            'jam_tutup' => '17:00',
            'rating' => 4.9,
            'gambar' => null,
        ]);

        DestinasiWisata::create([
            'nama' => 'Taman Nasional Gunung Leuser',
            'kategori' => 'Hutan',
            'deskripsi' => 'Taman Nasional Gunung Leuser adalah kawasan konservasi dan habitat orangutan di Sumatera.',
            'lokasi' => 'Aceh & Sumatera Utara',
            'harga_tiket' => 35000,
            'jam_buka' => '06:00',
            'jam_tutup' => '16:00',
            'rating' => 4.7,
            'gambar' => null,
        ]);
    }
}