<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producto_titulo',300);
            $table->integer('producto_categoria')->unsigned();
            $table->integer('producto_subcategoria')->unsigned();
            $table->integer('producto_marca')->unsigned();
            $table->integer('producto_aliado')->unsigned()->default(0);
            $table->text('producto_descripcion')->nullable();
            $table->text('producto_letra_chica')->nullable();
            $table->text('producto_email')->nullable();
            $table->text('producto_nit')->nullable();
            $table->text('producto_palabras_clave')->nullable();
            $table->text('producto_imagen')->nullable();
            $table->integer('producto_estatus')->nullable();
            $table->foreign('producto_categoria')->references('id')->on('conf_categorias')->onDelete('cascade');
            $table->foreign('producto_subcategoria')->references('id')->on('conf_subcategorias')->onDelete('cascade');
            $table->foreign('producto_marca')->references('id')->on('marcas')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
}
