<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id(); // ID auto increment
            $table->string('nim')->unique(); // NIM/NPM Mahasiswa
            $table->string('nama'); // Nama Mahasiswa
            $table->string('email')->unique(); // Email Mahasiswa
            $table->string('telepon')->nullable(); // Nomor Telepon
            $table->timestamps(); // Created at dan updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
