<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fechaB');
            $table->string('asesor');
            $table->string('OrdenP');
            $table->string('factura');
            $table->string('metodoP');
            $table->string('formaP');
            $table->string('cfdi');
            $table->string('precioN');
            $table->string('producto');
            $table->unsignedBigInteger('dato_id'); // Relación con productos
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
        Schema::dropIfExists('registers');
    }
}
