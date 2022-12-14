<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCajero');
            $table->unsignedBigInteger('idMesa');
            $table->dateTime('fecha')->nullable();
    
            $table->foreign('idCajero')->references('id')->on('cajeros');
            $table->foreign('idMesa')->references('id')->on('mesas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignas');
    }
}
