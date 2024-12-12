<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. tambahkan struktur tabel. setelah itu php artisan migrate setlah itu buat di terminal php artisan make:model Menu

     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama menu
            $table->text('deskripsi'); // Deskripsi menu
            $table->decimal('harga', 10, 2); // Harga menu
            $table->string('gambar'); // Path gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
