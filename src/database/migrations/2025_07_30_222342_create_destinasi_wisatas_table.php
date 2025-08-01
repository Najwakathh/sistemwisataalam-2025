<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('destinasi_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori'); // gunung, pantai, air terjun, hutan
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->integer('harga_tiket')->nullable();
            $table->string('jam_buka')->nullable();
            $table->string('jam_tutup')->nullable();
            $table->float('rating')->default(0);
            $table->string('gambar')->nullable(); // path ke gambar destinasi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinasi_wisatas');
    }
};
