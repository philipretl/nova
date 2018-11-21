<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('credito_users_id')->unsigned();
            $table->integer('credito_compra_id')->unsigned();
            $table->float('credito_saldo')->unsigned();
            $table->dateTime('credito_fecha');
            $table->unsignedTinyInteger('credito_tipo');
            $table->text('credito_descripcion');
            $table->foreign('credito_users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('credito_compra_id')->references('id')->on('compras')->onDelete('cascade');
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
        Schema::dropIfExists('creditos');
    }
}
