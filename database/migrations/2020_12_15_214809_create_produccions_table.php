<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('produccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fechaP');
            $table->string('folio');
            $table->string('tipo_unidad');
            $table->string('marca');
            $table->string('modelo');
            $table->string('year');
            $table->string('serie');
            $table->string('tipo_trabajo');
            $table->string('serie_caja'); //nullable
            $table->unsignedBigInteger('venta_id'); // Relación con ventas
            $table->foreign('venta_id')->references('id')->on('ventas');



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
        Schema::dropIfExists('produccions');

    }
}
