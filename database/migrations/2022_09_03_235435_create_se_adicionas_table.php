<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeAdicionasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('se_adicionas', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('idPedido');
            $table->unsignedBigInteger('idProducto');
            $table->Integer('cantidad')->default(1);
            $table->softDeletes();


            
            $table->foreign('idPedido')
            ->references('id')
            ->on('pedidos')->onDelete('cascade');
            $table->foreign('idProducto')
            ->references('id')
            ->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('se_adicionas');
    }
}
