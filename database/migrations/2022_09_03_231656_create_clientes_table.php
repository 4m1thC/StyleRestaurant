<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('edad')->nullable();
            $table->string('tipo')->nullable();
            $table->string('valoracion')->nullable();
            $table->unsignedBigInteger('idUsuario')->nullable(); 
            $table->unsignedBigInteger('mesa_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idUsuario')
            ->references('id')
            ->on('usuarios');
            
            $table->foreign('mesa_id')
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
        Schema::dropIfExists('clientes');
    }
}
