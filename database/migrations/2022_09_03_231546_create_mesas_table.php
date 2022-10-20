<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->integer('capacidad')->nullable();
            $table->string('ubicacion')->nullable();

            $table->boolean('estado')->nullable();            

            $table->unsignedBigInteger('idCamarero');

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
        Schema::dropIfExists('mesas');
    }
}
