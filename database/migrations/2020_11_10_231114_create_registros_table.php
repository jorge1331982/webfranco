<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cotizacion');
            $table->date('fecha');
            $table->string('id_cliente');
            $table->string('empresa');
            $table->string('contacto');
            $table->string('telefono1');
            $table->string('tipo_unidad');
            $table->string('correo');
            $table->string('medio');
            $table->string('asesor');
            $table->string('tipo_servicio');
            $table->string('productos');
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
        Schema::dropIfExists('registros');
    }
}
