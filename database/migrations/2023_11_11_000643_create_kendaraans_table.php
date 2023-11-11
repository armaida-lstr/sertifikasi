<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id('id_kendaraan'); // Assuming you want to use an auto-incrementing primary key
            $table->string('jenis');
            $table->string('model');
            $table->integer('tahun');
            $table->integer('jml_kursi');
            $table->string('manufaktur');
            $table->integer('harga');
            

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
    
};
