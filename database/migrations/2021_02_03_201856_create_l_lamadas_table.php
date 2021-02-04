<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLLamadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_lamadas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('empresa');
            $table->string('contacto');
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('medio')->nullable();
            $table->string('requerimiento');
            $table->string('comentario');
            $table->string('asesor');
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
        Schema::dropIfExists('l_lamadas');
    }
}
