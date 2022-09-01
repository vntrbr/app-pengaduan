<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input', function (Blueprint $table) {
            $table->id('id_pelaporan');
            $table->BigInteger('nik')->unsigned()->nullable();
            $table->foreign('nik')->references('nik')->on('penduduk')->cascadeOnDelete();
            $table->BigInteger('id_kategori')->unsigned()->nullable();
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->cascadeOnDelete();
            $table->string('lokasi',50);
            $table->string('ket',50);
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
        Schema::dropIfExists('input');
    }
}
