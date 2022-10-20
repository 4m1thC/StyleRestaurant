<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespachasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idChef');
            $table->unsignedBigInteger('idPedido');
            $table->dateTime('fecha')->nullable();
            
            
            $table->foreign('idChef')
            ->references('id')
            ->on('chefs');
            $table->foreign('idPedido')
            ->references('id')
            ->on('pedidos');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('despachas');
    }
}
