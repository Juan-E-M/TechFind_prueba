<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarioproductos', function (Blueprint $table) {
            $table->id('_id');
            $table->id('pro_id');
            $table->id('usu_id');
            $table->foreign('pro_id')->references('_id')->on('productos');
            $table->foreign('usu_id')->references('_id')->on('usuarios');
            $table->string('valoracion');
            $table->string('texto_comentario');
            $table->string('imagenes');
            $table->date('fech_cre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarioproductos');
    }
}
