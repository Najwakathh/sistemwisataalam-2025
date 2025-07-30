<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ArtikelWisata;

class ArtikelWisataSeeder extends Seeder
{
    public function run(): void
    {
        ArtikelWisata::create([
            'judul' => 'Tips Mendaki Gunung untuk Pemula',
            'konten' => 'Pastikan membawa perlengkapan dasar, cek cuaca, dan jangan mendaki sendirian.',
            'kategori' => 'Tips',
            'penulis' => 'Admin Wisata',
            'tanggal' => now(),
        ]);

        ArtikelWisata::create([
            'judul' => 'Edukasi Pentingnya Menjaga Kebersihan Alam',
            'konten' => 'Jangan meninggalkan sampah saat berwisata. Bawa kantong sampah sendiri dan bantu jaga lingkungan.',
            'kategori' => 'Edukasi',
            'penulis' => 'Relawan Hijau',
            'tanggal' => now()->subDays(5),
        ]);

        ArtikelWisata::create([
            'judul' => 'Perlengkapan Survival Wajib Bawa Saat Camping',
            'konten' => 'Senter, kompas, pisau lipat, jas hujan, dan kotak P3K wajib ada di ransel camping kamu.',
            'kategori' => 'Survival',
            'penulis' => 'Tim Rescue',
            'tanggal' => now()->subDays(10),
        ]);
    }
}
