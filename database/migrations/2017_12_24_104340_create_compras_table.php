<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->text('compra_codigo_compra')->nullable();
            $table->string('compra_codigo_hex');
            $table->string('compra_codigo_entero');
            $table->integer('compra_users_id')->unsigned();
            $table->integer('compra_productop_id')->unsigned();
            $table->integer('compra_cantidad');
            $table->float('compra_total');
            $table->integer('compra_oferta')->default(0);
            $table->date('compra_oferta_fecha_inicio')->nullable();
            $table->date('compra_oferta_fecha_fin')->nullable();
            $table->integer('compra_estatus');
            $table->foreign('compra_users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('compra_productop_id')->references('id')->on('producto_precios')->onDelete('cascade');
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
        Schema::dropIfExists('compras');
    }
}
