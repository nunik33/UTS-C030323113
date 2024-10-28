<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbingansTable extends Migration
{
    public function up()
    {
        Schema::create('bimbingan', function (Blueprint $table) {
            $table->id(); // ID auto increment
            $table->foreignId('topik_skripsi_id')->constrained('topik_skripsi')->onDelete('cascade'); // ID Topik Skripsi
            $table->foreignId('dosen_id')->constrained('dosen')->onDelete('cascade'); // ID Dosen Pembimbing
            $table->date('tanggal_bimbingan'); // Tanggal Bimbingan
            $table->text('catatan')->nullable(); // Catatan Bimbingan
            $table->timestamps(); // Created at dan updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('bimbingan');
    }
}
