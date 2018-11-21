<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\ConfCategoria;

class CreateConfCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('conf_cat_nombre',200);
            $table->text('conf_cat_condiciones')->nullable();
            $table->text('conf_cat_imagen');
            $table->integer('conf_cat_estatus');
            $table->timestamps();
        });

        //INSERTAR CATEGORIAS
        $datos=array(
            array(
                'conf_cat_nombre' => 'Buen Apetito' , 
                'conf_cat_condiciones' => '' , 
                'conf_cat_imagen' => '1.png', 
                'conf_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'conf_cat_nombre' => 'Servicio' , 
                'conf_cat_condiciones' => '' , 
                'conf_cat_imagen' => '2.png', 
                'conf_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'conf_cat_nombre' => 'Salud y Belleza' , 
                'conf_cat_condiciones' => '' , 
                'conf_cat_imagen' => '3.png', 
                'conf_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'conf_cat_nombre' => 'Destinos' , 
                'conf_cat_condiciones' => '' , 
                'conf_cat_imagen' => '4.png', 
                'conf_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'conf_cat_nombre' => 'Productos' , 
                'conf_cat_condiciones' => '' , 
                'conf_cat_imagen' => '5.png', 
                'conf_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            )
        );
        ConfCategoria::insert($datos);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conf_categorias');
    }
}
