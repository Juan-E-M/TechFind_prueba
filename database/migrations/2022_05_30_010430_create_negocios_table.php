<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios', function (Blueprint $table) {
            $table->id('_id');
            $table->string('nombre_negocio');
            $table->string('descripcion');
            $table->string('hora_atencion');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('direccion');
            $table->id('cont_id');
            $table->foreign('cont')->references('_id')->on('contactos');
            $table->string('imagen_portada');
            $table->string('imagen_negocio');
            $table->string('fech_cre');
            $table->string('fech_actu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negocios');
    }
}
