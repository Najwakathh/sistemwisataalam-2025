<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UlasanPengunjung;

class UlasanPengunjungSeeder extends Seeder
{
    public function run(): void
    {
        UlasanPengunjung::create([
            'nama_pengunjung' => 'Ayu Putri',
            'destinasi_wisata' => 'Gunung Bromo',
            'rating' => 5,
            'komentar' => 'Pemandangan sunrise sangat menakjubkan!',
        ]);

        UlasanPengunjung::create([
            'nama_pengunjung' => 'Rizky Hadi',
            'destinasi_wisata' => 'Pantai Kuta',
            'rating' => 4,
            'komentar' => 'Pantainya bersih dan cocok buat liburan keluarga.',
        ]);
    }
}
