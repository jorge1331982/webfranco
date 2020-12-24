<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizaconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacons', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('folio');
            $table->string('n_cliente');
            $table->string('correo');
            $table->string('telefono');
            $table->string('producto');
            $table->string('tipo');
            $table->string('imagen');
            $table->string('asesor');
            $table->float('largo');
            $table->float('ancho');
            $table->float('alto');
            $table->float('copete');
            $table->string('sugeridos');
            $table->integer('calibres');
            $table->integer('intandext');
            $table->integer('techo');
            $table->integer('precio');
            $table->string('accesorios');
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
        Schema::dropIfExists('cotizacons');
    }
}
