<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRegistraciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido',255);
            $table->string('nombre',255);
            $table->string('email',50);
            $table->string('password',50);
            $table->string('domicilio',255);
            $table->string('localidad',50);
            $table->integer('cp');
            $table->string('slug')->nullable();
            $table->tinyInteger('estado')->default(1);
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registraciones');
    }
}
