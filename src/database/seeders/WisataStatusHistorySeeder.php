<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WisataStatusHistory;

class WisataStatusHistorySeeder extends Seeder
{
    public function run(): void
    {
        WisataStatusHistory::insert([
            [
                'user_id' => 1,
                'nama_destinasi' => 'Gunung Bromo',
                'status' => 'open',
                'catatan' => 'Dibuka kembali setelah cuaca cerah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'nama_destinasi' => 'Raja Ampat',
                'status' => 'limited',
                'catatan' => 'Dibatasi karena kuota penuh.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'nama_destinasi' => 'Kawah Ijen',
                'status' => 'closed',
                'catatan' => 'Ditutup sementara karena gas beracun.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
