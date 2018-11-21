<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


use App\AyudaCategoria;

class CreateAyudasCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudas_categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ayudas_cat_nombre',200);
            $table->text('ayudas_cat_imagen')->nullable();
            $table->integer('ayudas_cat_estatus');
            $table->timestamps();
        });



        //INSERTAR CATEGORIAS
        $datos=array(
            array(
                'ayudas_cat_nombre' => 'City Inquietudes' , 
                'ayudas_cat_imagen' => '1.png', 
                'ayudas_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'ayudas_cat_nombre' => 'Inquietudes sobre tu Citycuenta' , 
                'ayudas_cat_imagen' => '2.png', 
                'ayudas_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'ayudas_cat_nombre' => 'City Entregas' , 
                'ayudas_cat_imagen' => '3.png', 
                'ayudas_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'ayudas_cat_nombre' => 'Inquietudes sobre tu City Compra' , 
                'ayudas_cat_imagen' => '4.png', 
                'ayudas_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'ayudas_cat_nombre' => 'City Destinos' , 
                'ayudas_cat_imagen' => '5.png', 
                'ayudas_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'ayudas_cat_nombre' => 'City Soluciones' , 
                'ayudas_cat_imagen' => '6.png', 
                'ayudas_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'ayudas_cat_nombre' => 'City Aliados' , 
                'ayudas_cat_imagen' => '7.png', 
                'ayudas_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            )
        );
        AyudaCategoria::insert($datos);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayudas_categorias');
    }
}
