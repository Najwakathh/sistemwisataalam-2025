<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('akses_transportasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');               // Nama tempat wisata
            $table->string('rute')->nullable();           // Rute atau arah
            $table->string('jenis_kendaraan')->nullable(); // Mobil, motor, angkot, jeep, dll
            $table->text('informasi_sewa')->nullable();   // Info harga dan kontak penyewaan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('akses_transportasi');
    }
};
