<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal'); // Tanggal artikel
            $table->string('judul', 255); // Judul artikel
            $table->string('kategori', 255); // Kategori artikel
            $table->string('status', 255); // Status artikel
            $table->string('artikel', 255); // Konten artikel
            $table->string('gambar', 255)->nullable(); // Gambar artikel (optional)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
