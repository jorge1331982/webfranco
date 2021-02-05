<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('empresa');
            $table->string('mes');
            $table->string('vendedor');
            $table->string('seriep');
            $table->string('cliente');
            $table->string('producto');
            $table->string('estatus');
            $table->date('fechaentradaProduccion');
            $table->date('fechaProgramadaEntrega');
             $table->date('fechaEntrega');
             $table->unsignedBigInteger('control_id'); // Relación con productos
            $table->foreign('control_id')->references('id')->on('controls')->onDelete('cascade');
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
        Schema::dropIfExists('registos');
    }
}
