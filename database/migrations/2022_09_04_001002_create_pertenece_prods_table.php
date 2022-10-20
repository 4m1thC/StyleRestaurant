<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerteneceProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertenece_prods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProd');
            $table->unsignedBigInteger('idIngrediente');
            
            $table->foreign('idProd')
            ->references('id')
            ->on('productos');
            $table->foreign('idIngrediente')
            ->references('id')
            ->on('ingredientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertenece_prods');
    }
}
