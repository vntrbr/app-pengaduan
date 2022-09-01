<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->id('id_aspirasi');
            $table->bigInteger('id_pelaporan')->unsigned()->nullable();
            $table->foreign('id_pelaporan')->references('id_pelaporan')->on('input')->cascadeOnDelete();
            $table->bigInteger('id_kategori')->unsigned()->nullable();
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->cascadeOnDelete();
            $table->enum('status',['menunggu','proses','selesai'])->default("menunggu");
            $table->unsignedBigInteger('nik');
            $table->foreign('nik')->references('nik')->on('penduduk')->cascadeOnDelete();
            $table->string('feedback',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aspirasi');
    }
}
