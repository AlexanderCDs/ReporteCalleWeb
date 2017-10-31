<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFirebaseLaravels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Firebase_Laravels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comentario');
            $table->string('correo');
            $table->string('direccion');
            $table->string('estado');
            $table->string('fecha');
            $table->string('hora');
            $table->string('image');
            $table->string('token');
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
        Schema::dropIfExists('Firebase_Laravels');
    }
}
