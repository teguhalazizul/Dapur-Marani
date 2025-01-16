<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentangKamiTable extends Migration
{
    public function up()
    {
        Schema::create('tentang_kami', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('jam_buka');
            $table->string('lokasi');
            $table->text('visi');
            $table->text('misi');
            $table->text('sejarah_singkat');
            $table->string('gambar')->nullable();
            $table->timestamps(); // Hapus atau nonaktifkan jika tidak diperlukan
        });
    }

    public function down()
    {
        Schema::dropIfExists('tentang_kami');
    }
}
