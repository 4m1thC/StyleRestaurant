<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postres', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->nullable();
            $table->integer('nroComesales')->nullable();
            
            $table->foreign('id')
            ->references('id')
            ->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postres');
    }
}
