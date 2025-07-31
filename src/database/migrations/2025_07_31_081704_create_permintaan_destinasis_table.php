<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanDestinasisTable extends Migration
{
    public function up(): void
    {
        Schema::create('permintaan_destinasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('lokasi_preferensi'); // Contoh: Jawa Barat
            $table->string('kategori_wisata');   // Contoh: Air Terjun, Pantai, dll
            $table->text('catatan_opsional')->nullable(); // Jika user ingin menambahkan keterangan
            $table->enum('status', ['menunggu', 'diproses', 'selesai'])->default('menunggu');
            $table->timestamps(); // created_at = waktu masuk antrian
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permintaan_destinasi');
    }
}
