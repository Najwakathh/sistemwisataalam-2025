<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('informasi_tiket_fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->integer('harga_tiket')->nullable();
            $table->string('jam_buka')->nullable();
            $table->string('jam_tutup')->nullable();
            $table->text('fasilitas')->nullable();
            $table->string('kontak_pengelola')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi_tiket_fasilitas');
    }
};
