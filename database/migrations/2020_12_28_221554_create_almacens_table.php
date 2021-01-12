<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('sku');
            $table->string('categoria');
            $table->integer('cantidad');
            $table->string('medida');
            $table->unsignedBigInteger('venta_id'); // Relación con productos
            $table->foreign('venta_id')->references('id')->on('ventas');

            $table->unsignedBigInteger('inventario_id')->nullable(); // Relación con productos
            $table->foreign('inventario_id')->references('id')->on('inventarios');
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
        Schema::dropIfExists('almacens');
    }
}
