<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idIngrediente');
            $table->unsignedBigInteger('idProv');
            $table->integer('cantidad')->nullable();
            $table->string('unidadmedida')->nullable();
            $table->float('precio')->nullable();
            $table->dateTime('fecha')->nullable();
            

            
            $table->foreign('idIngrediente')
            ->references('id')
            ->on('ingredientes');
            $table->foreign('idProv')
            ->references('id')
            ->on('proveedors');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provees');
    }
}
