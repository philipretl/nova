<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aliado_tipo');
            $table->string('aliado_nombres',200)->nullable();
            $table->string('aliado_apellidos',200)->nullable();
            $table->string('aliado_razon_social',350)->nullable();
            $table->string('aliado_nit',20);
            $table->text('aliado_direccion')->nullable();
            $table->text('aliado_ciudad')->nullable();
            $table->text('aliado_pais')->nullable();
            $table->string('aliado_telefono_fijo',30);
            $table->string('aliado_telefono_celular',30);
            $table->string('aliado_email',100)->unique();
            $table->string('aliado_web',100)->nullable();
            $table->text('aliado_descripcion');
            $table->text('aliado_ofrece');
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
        Schema::dropIfExists('aliados');
    }
}
