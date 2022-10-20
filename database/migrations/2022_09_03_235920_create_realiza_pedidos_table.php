<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealizaPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realiza_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPedido');
            $table->unsignedBigInteger('idCamarero');
            $table->unsignedBigInteger('idMesa');
            $table->dateTime('fechaR')->nullable();
            

            
            $table->foreign('idPedido')
            ->references('id')
            ->on('pedidos');
            $table->foreign('idCamarero')
            ->references('id')
            ->on('camareros');
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
        Schema::dropIfExists('realiza_pedidos');
    }
}
