<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSejarahsingkatsTable extends Migration
{
    public function up()
    {
        Schema::create('sejarahsingkats', function (Blueprint $table) {
            $table->id();
            $table->text('konten'); // Kolom untuk konten
            $table->timestamps(); // Kolom untuk timestamps (created_at dan updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('sejarahsingkats');
    }
}
