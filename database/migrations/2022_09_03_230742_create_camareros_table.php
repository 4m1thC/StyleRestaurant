<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamarerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camareros', function (Blueprint $table) {
            $table->id();
            $table->string('experiencia')->nullable();
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
        Schema::dropIfExists('camareros');
    }
}
