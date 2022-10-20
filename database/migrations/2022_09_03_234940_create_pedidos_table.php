<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->nullable();
            $table->unsignedBigInteger('idCajero')->nullable();
            $table->unsignedBigInteger('idCliente')->nullable();
            $table->unsignedBigInteger('idCamarero')->nullable();
            $table->dateTime('fechaP')->nullable();
            $table->dateTime('fechaF')->nullable();
            $table->float('Costototal')->nullable();
            $table->string('obs')->nullable();
            $table->boolean('estado')->nullable();
            $table->string('estadoPed')->nullable();
            $table->timestamps();
            $table->softDeletes();

            
            $table->foreign('idCajero')
            ->references('id')
            ->on('cajeros');
           
            $table->foreign('idCliente')
            ->references('id')
            ->on('clientes');
         
            $table->foreign('idCamarero')
            ->references('id')
            ->on('camareros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
