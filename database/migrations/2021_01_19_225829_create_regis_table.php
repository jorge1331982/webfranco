<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->string('productophp artisan migrate');
            $table->integer('precioN');
            $table->string('serieU')->nullable();
            $table->string('serieC')->nullable();
            $table->string('facturaR');
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
        Schema::dropIfExists('regis');
    }
}
