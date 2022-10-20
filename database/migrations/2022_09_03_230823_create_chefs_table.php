<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->integer('descripcion')->nullable();
            $table->integer('experiencia')->nullable();
            $table->integer('edad')->nullable();
            $table->unsignedBigInteger('idUsuario')->nullable();
            $table->softDeletes();
            $table->foreign('idUsuario')
            ->references('id')
            ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chefs');
    }
}
