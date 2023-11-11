<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kendaraanku_id');
            $table->foreign('kendaraanku_id')->references('id_kendaraan')->on('kendaraans')->onDelete('cascade');
            $table->string('ukuran_bagasi');
            $table->integer('kapasitas_bensin');
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
        Schema::dropIfExists('motors');
    }
};
