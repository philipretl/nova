<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca_nombre',200);
            $table->text('marca_imagen');
            $table->date('marca_fecha_inicio');
            $table->date('marca_fecha_fin');
            $table->string('marca_direccion');
            $table->string('marca_telefono');
            $table->string('marca_youtube')->nullable();
            $table->string('marca_url')->nullable();
            $table->integer('marca_estatus');
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
        Schema::dropIfExists('marcas');
    }
}
