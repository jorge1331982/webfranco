<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('Oservicio');
            $table->string('Cliente');
            $table->string('Tipo_Producto');
            $table->string('tipo_servicio');
            $table->string('tipo_unidad');
            $table->string('vendedor');
            $table->integer('precio');
            $table->string('comentarios');
            $table->unsignedBigInteger('user_id')->constrained(); // Relación con productos
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('ventas');
    }
}
