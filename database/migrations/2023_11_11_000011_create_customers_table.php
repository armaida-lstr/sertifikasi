<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('id_customer'); // Assuming you want to use an auto-incrementing primary key
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('id_card')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
