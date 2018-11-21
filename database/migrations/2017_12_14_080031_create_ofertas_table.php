<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oferta_producto_id')->unsigned();
            $table->float('oferta_total');
            $table->float('oferta_descuento');
            $table->float('oferta_total_descuento');
            $table->date('oferta_fecha_inicio');
            $table->date('oferta_fecha_fin');
            $table->integer('oferta_slider');
            $table->integer('oferta_estatus')->nullable();
            $table->foreign('oferta_producto_id')->references('id')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('ofertas');
    }
}
