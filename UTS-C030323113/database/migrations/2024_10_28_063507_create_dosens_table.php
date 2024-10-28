<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id(); // ID auto increment
            $table->string('nip')->unique(); // NIP Dosen
            $table->string('nama'); // Nama Dosen
            $table->string('email')->unique(); // Email Dosen
            $table->string('telepon')->nullable(); // Nomor Telepon
            $table->timestamps(); // Created at dan updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}
