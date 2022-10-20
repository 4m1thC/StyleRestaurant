<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Cliente;
use App\Models\Camarero;
use App\Models\Administrador;
use App\Models\Cajero;
use App\Models\Chef;
class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
          
           $table->id();
           $table->integer('ci')->nullable();
           $table->string('name')->nullable();
           $table->string('nombre')->nullable();
           $table->string('ape_paterno')->nullable();
           $table->string('ape_materno')->nullable();
           $table->dateTime('fechaRegistro', 0)->nullable();
           $table->string('tipo')->nullable();
           $table->string('password');
           $table->string('email')->unique();
           $table->timestamp('email_verified_at')->nullable();
           $table->boolean('estado')->nullable();
           $table->rememberToken()->nullable();
           $table->timestamps();
           $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
