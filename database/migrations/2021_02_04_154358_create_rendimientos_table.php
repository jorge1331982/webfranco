<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('empleado');
            $table->integer('kminicial');
            $table->integer('kmfinal');
            $table->integer('kilometraje')->nullable();
            $table->integer('costogas')->nullable();
            $table->integer('gasto');
            $table->unsignedBigInteger('gasolina_id')->nullable(); // Relación con productos
            $table->foreign('gasolina_id')->references('id')->on('gasolinas')->onDelete('cascade');
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
        Schema::dropIfExists('rendimientos');
    }
}
