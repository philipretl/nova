<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyudasDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudas_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ayudas_id')->unsigned();
            $table->integer('ayudas_detalles_util')->unsigned();
            $table->integer('ayudas_users_id')->nullable();
            $table->string('ayudas_ip',20)->nullable();
            $table->foreign('ayudas_id')->references('id')->on('ayudas')->onDelete('cascade');
            //$table->foreign('ayudas_users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('ayudas_detalles');
    }
}
