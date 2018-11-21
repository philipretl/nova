<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoPreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_precios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productop_id')->unsigned();
            $table->text('productop_titulo');
            $table->float('productop_total');
            $table->float('productop_descuento');
            $table->float('productop_total_descuento');
            $table->date('productop_fecha_inicio')->nullable();
            $table->date('productop_fecha_fin')->nullable();
            $table->integer('productop_slider')->default(0);
            $table->integer('productop_oferta')->default(0);
            $table->integer('productop_cantidad')->default(0);
            $table->integer('productop_estatus')->nullable();
            $table->foreign('productop_id')->references('id')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('productop_precios');
    }
}
