<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallenegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallenegocios', function (Blueprint $table) {
            $table->id('_id');
            $table->id('neg_id');
            $table->id('usu_id');
            $table->id('cat_id');
            $table->id('negocio_colaboradores');
            $table->id('pro_id');

            $table->foreign('neg_id')->references('_id')->on('negocios');
            $table->foreign('usu_id')->references('_id')->on('usuarios');
            $table->foreign('cat_id')->references('_id')->on('categorias');
            $table->foreign('negocio_colaboradores')->references('_id')->on('usuarios');
            $table->foreign('pro_id')->references('_id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallenegocios');
    }
}
