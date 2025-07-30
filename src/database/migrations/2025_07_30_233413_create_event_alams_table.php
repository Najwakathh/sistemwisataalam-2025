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
        Schema::create('event_alams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_event');
            $table->string('lokasi');
            $table->date('tanggal');
            $table->enum('jenis_lokasi', ['Gunung', 'Hutan', 'Air Terjun', 'Danau', 'Pantai']);
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable(); // opsional jika ingin pakai upload gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_alams');
    }
};
