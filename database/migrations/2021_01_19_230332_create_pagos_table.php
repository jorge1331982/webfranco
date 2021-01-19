<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fechaB');
            $table->integer('anticipo');
            $table->string('razonsocial2');

            $table->unsignedBigInteger('dato_id')->nullable(); // Relación con productos
            $table->foreign('dato_id')->references('id')->on('datos');
            $table->unsignedBigInteger('regi_id')->nullable(); // Relación con productos
            $table->foreign('regi_id')->references('id')->on('regis');
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
        Schema::dropIfExists('pagos');
    }
}
