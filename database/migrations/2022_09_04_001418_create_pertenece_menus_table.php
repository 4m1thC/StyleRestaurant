<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerteneceMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertenece_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProd');
            $table->unsignedBigInteger('idMenu');
            $table->integer('cantidad')->nullable();
            

            $table->foreign('idProd')
            ->references('id')
            ->on('productos')->onDelete('cascade');
            $table->foreign('idMenu')
            ->references('id')
            ->on('menus')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertenece_menus');
    }
}
