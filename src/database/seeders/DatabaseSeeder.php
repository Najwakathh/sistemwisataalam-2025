<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WisataStatusHistory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            DestinasiWisataSeeder::class,
            EventAlamSeeder::class,
            InformasiTiketFasilitasSeeder::class,
            ArtikelWisataSeeder::class,
            AksesTransportasiSeeder::class,
            UlasanPengunjungSeeder::class,
            WisataStatusHistorySeeder::class,
        ]);
    }
}
