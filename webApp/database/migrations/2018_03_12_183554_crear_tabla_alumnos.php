<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clave');
            $table->string('aPaterno');
            $table->string('aMaterno');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('celular');
            $table->date('fNacimiento');
            $table->string('lNacimiento');
            $table->string('cura');
            $table->string('curp');

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
        Schema::dropIfExists('alumnos');
    }
}
