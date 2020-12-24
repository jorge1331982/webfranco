<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('quien_recibe');
            $table->string('quien_entrega');
            $table->string('revision_calidad');
            $table->string('vobo_salida');
            $table->unsignedBigInteger('venta_id'); // Relación con ventas
            $table->foreign('venta_id')->references('id')->on('ventas');
            $table->unsignedBigInteger('produccion_id'); // Relación con ventas
            $table->foreign('produccion_id')->references('id')->on('produccions');

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
        Schema::dropIfExists('salidas');
    }
}
