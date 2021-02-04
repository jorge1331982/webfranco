<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGasolinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasolinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehiculo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('year');
            $table->string('placas');
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
        Schema::dropIfExists('gasolinas');
    }
}
