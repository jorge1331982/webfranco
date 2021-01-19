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
            $table->date('fechaA');
            $table->string('nombreC');
            $table->string('correo');
            $table->string('telefono');
            $table->string('calle');
            $table->string('numero');
            $table->string('colonia');
            $table->string('mpio');
            $table->string('estado');
            $table->string('codigop');
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
