<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstaUbicadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esta_ubicados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idMesa');
            $table->dateTime('fecha')->nullable();
            $table->softDeletes();

            $table->foreign('idCliente')
            ->references('id')
            ->on('clientes');
            $table->foreign('idMesa')
            ->references('id')
            ->on('mesas');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esta_ubicados');
    }
}
