<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('provedor');
            $table->integer('cantida');
            $table->string('comenta');
            $table->unsignedBigInteger('inventario_id')->nullable(); // Relación con productos
            $table->foreign('inventario_id')->references('id')->on('inventarios');

            $table->unsignedBigInteger('compra_id'); // Relación con productos
            $table->foreign('compra_id')->references('id')->on('compras');
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
        Schema::dropIfExists('entradas');
    }
}
