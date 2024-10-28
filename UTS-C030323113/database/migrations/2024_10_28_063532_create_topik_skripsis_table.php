<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopikSkripsisTable extends Migration
{
    public function up()
    {
        Schema::create('topik_skripsi', function (Blueprint $table) {
            $table->id(); // ID auto increment
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa')->onDelete('cascade'); // ID Mahasiswa
            $table->string('judul'); // Judul Skripsi
            $table->text('deskripsi')->nullable(); // Deskripsi Skripsi
            $table->timestamps(); // Created at dan updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('topik_skripsi');
    }
}
