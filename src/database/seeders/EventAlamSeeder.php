<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventAlam;

class EventAlamSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_event' => 'Pendakian Bersama Gunung Bromo',
                'lokasi' => 'Gunung Bromo, Jawa Timur',
                'tanggal' => '2025-08-12',
                'jenis_lokasi' => 'Gunung',
                'deskripsi' => 'Pendakian bersama dengan komunitas pecinta alam se-Jawa Timur. Termasuk camping, sharing, dan pelatihan survival.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Festival Matahari Terbit Semeru',
                'lokasi' => 'Gunung Semeru',
                'tanggal' => '2025-09-01',
                'jenis_lokasi' => 'Gunung',
                'deskripsi' => 'Event menikmati sunrise di puncak Mahameru. Tersedia dokumentasi drone dan edukasi lingkungan.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Jelajah Hutan Gunung Leuser',
                'lokasi' => 'Taman Nasional Gunung Leuser, Aceh',
                'tanggal' => '2025-08-20',
                'jenis_lokasi' => 'Hutan',
                'deskripsi' => 'Eksplorasi flora dan fauna langka, termasuk observasi orangutan, workshop konservasi, dan camping.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Eco Camp Hutan Lindung Kalimantan',
                'lokasi' => 'Kalimantan Tengah',
                'tanggal' => '2025-09-14',
                'jenis_lokasi' => 'Hutan',
                'deskripsi' => 'Camping ramah lingkungan, edukasi konservasi dan penanaman pohon bersama LSM lokal.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Adventure Trekking Tumpak Sewu',
                'lokasi' => 'Air Terjun Tumpak Sewu, Lumajang',
                'tanggal' => '2025-07-30',
                'jenis_lokasi' => 'Air Terjun',
                'deskripsi' => 'Menyusuri jalur curam menuju air terjun, dokumentasi foto alam, dan games outdoor.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Photography Challenge Curug Lawe',
                'lokasi' => 'Curug Lawe, Semarang',
                'tanggal' => '2025-10-08',
                'jenis_lokasi' => 'Air Terjun',
                'deskripsi' => 'Kontes fotografi air terjun, dengan hadiah menarik dan kelas foto outdoor oleh fotografer alam profesional.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Danau Toba Nature Fest',
                'lokasi' => 'Danau Toba, Sumatera Utara',
                'tanggal' => '2025-08-05',
                'jenis_lokasi' => 'Danau',
                'deskripsi' => 'Lomba rakit bambu, konser musik alam, lomba memancing, dan UMKM lokal.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Sunset Canoe & Camp Ranu Kumbolo',
                'lokasi' => 'Ranu Kumbolo, Semeru',
                'tanggal' => '2025-09-27',
                'jenis_lokasi' => 'Danau',
                'deskripsi' => 'Mengelilingi danau dengan kano, camping malam, dan penanaman pohon pinus.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Bersih-Bersih Pantai Kuta',
                'lokasi' => 'Pantai Kuta, Bali',
                'tanggal' => '2025-08-17',
                'jenis_lokasi' => 'Pantai',
                'deskripsi' => 'Kegiatan bersih-bersih pantai serentak bersama pengunjung dan komunitas lokal. Termasuk workshop daur ulang.',
                'gambar' => null,
            ],
            [
                'nama_event' => 'Festival Surfing Pantai Pacitan',
                'lokasi' => 'Pantai Srau, Pacitan',
                'tanggal' => '2025-09-22',
                'jenis_lokasi' => 'Pantai',
                'deskripsi' => 'Lomba surfing nasional, pelatihan surfing gratis, dan pameran kuliner pesisir.',
                'gambar' => null,
            ],
        ];

        foreach ($data as $item) {
            EventAlam::create($item);
        }
    }
}
