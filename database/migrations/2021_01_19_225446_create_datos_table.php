<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreC');
            $table->string('correo');
            $table->string('telefono');
            $table->string('calle');
            $table->string('num');
            $table->string('colonia');
            $table->string('mpio');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('codigoP');
            $table->string('razonsocial');

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
        Schema::dropIfExists('datos');
    }
}
