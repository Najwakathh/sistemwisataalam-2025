<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ulasan_pengunjung', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengunjung');
            $table->string('destinasi_wisata'); // disimpan sebagai nama tempat
            $table->tinyInteger('rating')->default(0); // nilai bintang 1–5
            $table->text('komentar')->nullable(); // isi testimoni
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ulasan_pengunjung');
    }
};
