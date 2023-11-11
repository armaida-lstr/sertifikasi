<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id_transaksi'); // Assuming you want to use an auto-incrementing primary key
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_kendaraan');
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customers');
            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraans');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
