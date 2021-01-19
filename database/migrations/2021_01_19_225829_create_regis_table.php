<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fechaA');
            $table->string('asesor');
            $table->string('ordenP');
            $table->string('formaP');
            $table->string('metodoP');
            $table->integer('precioN');
            $table->string('serieU');
            $table->string('serieC');
            $table->string('facturaR');
            $table->unsignedBigInteger('dato_id')->nullable(); // Relación con productos
            $table->foreign('dato_id')->references('id')->on('datos');
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
        Schema::dropIfExists('regis');
    }
}
