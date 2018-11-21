<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\ConfSubcategoria;

class CreateConfSubcategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_subcategorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conf_subcat_cat_id')->unsigned();
            $table->string('conf_subcat_nombre',200);
            $table->text('conf_subcat_imagen')->nullable();
            $table->integer('conf_sub_cat_estatus');
            $table->foreign('conf_subcat_cat_id')->references('id')->on('conf_categorias')->onDelete('cascade');
            $table->timestamps();
        });

        //INSERTAR SUBCATEGORIAS
        $datos=array(
            
            /* CATEGORIA BUEN APETITO */
            array(
                'conf_subcat_cat_id' => '1',
                'conf_subcat_nombre' => 'Bares',
                'conf_subcat_imagen' => '1.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '1',
                'conf_subcat_nombre' => 'Cafés',
                'conf_subcat_imagen' => '2.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '1' ,
                'conf_subcat_nombre' => 'Comida Rápida' ,
                'conf_subcat_imagen' => '3.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '1' ,
                'conf_subcat_nombre' => 'Pastelería y Cafetería' ,
                'conf_subcat_imagen' => '4.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '1' ,
                'conf_subcat_nombre' => 'Restaurantes' ,
                'conf_subcat_imagen' => '5.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            
            /* CATEGORIA SERVICIOS */
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Cuidado de tu Mascota' ,
                'conf_subcat_imagen' => '6.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Cursos y Asesorías' ,
                'conf_subcat_imagen' => '7.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Deporte' ,
                'conf_subcat_imagen' => '8.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Espectáculos y Entretenimiento' ,
                'conf_subcat_imagen' => '9.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Fiestas Infantiles y Recreación' ,
                'conf_subcat_imagen' => '10.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Fotografía y Video' ,
                'conf_subcat_imagen' => '11.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Fumigación' ,
                'conf_subcat_imagen' => '12.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Limpieza y Aseo' ,
                'conf_subcat_imagen' => '13.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Mantenimiento de Electrodomésticos' ,
                'conf_subcat_imagen' => '14.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Mantenimiento Vehículos' ,
                'conf_subcat_imagen' => '15.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Servicios Profesionales' ,
                'conf_subcat_imagen' => '16.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Espectáculos Públicos' ,
                'conf_subcat_imagen' => '17.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '2' ,
                'conf_subcat_nombre' => 'Cultura y Diversión' ,
                'conf_subcat_imagen' => '18.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            
            /* CATEGORIA SALUD Y BELLEZA */
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Asesoría de Imagen' ,
                'conf_subcat_imagen' => '19.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Cuidado de tu Piel' ,
                'conf_subcat_imagen' => '20.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Cuidado Dental' ,
                'conf_subcat_imagen' => '21.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Cuidado Facial' ,
                'conf_subcat_imagen' => '22.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Depilación' ,
                'conf_subcat_imagen' => '23.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Deporte' ,
                'conf_subcat_imagen' => '24.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Desintoxicación' ,
                'conf_subcat_imagen' => '25.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Gimnasio y Bienestar' ,
                'conf_subcat_imagen' => '26.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Glúteos' ,
                'conf_subcat_imagen' => '27.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Keratinas y Alisados' ,
                'conf_subcat_imagen' => '28.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Manos y Pies' ,
                'conf_subcat_imagen' => '29.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Maquillaje' ,
                'conf_subcat_imagen' => '30.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Peluquería' ,
                'conf_subcat_imagen' => '31.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Relajación' ,
                'conf_subcat_imagen' => '32.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Spa' ,
                'conf_subcat_imagen' => '33.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Tratamientos Reductores' ,
                'conf_subcat_imagen' => '34.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '3' ,
                'conf_subcat_nombre' => 'Opticas' ,
                'conf_subcat_imagen' => '35.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),

            /* CATEGORIA DESTINOS */
            array(
                'conf_subcat_cat_id' => '4',
                'conf_subcat_nombre' => 'Escapes y Aventuras al Aire Libre',
                'conf_subcat_imagen' => '36.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '4',
                'conf_subcat_nombre' => 'Hospedaje',
                'conf_subcat_imagen' => '37.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '4',
                'conf_subcat_nombre' => 'Pasadías',
                'conf_subcat_imagen' => '38.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '4',
                'conf_subcat_nombre' => 'Viajes',
                'conf_subcat_imagen' => '39.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()),

            /* CATEGORIA PRODUCTOS */
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Celulares y Tecnología ',
                'conf_subcat_imagen' => '40.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Chiquitines',
                'conf_subcat_imagen' => '41.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Cocina',
                'conf_subcat_imagen' => '42.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Cuidado Personal',
                'conf_subcat_imagen' => '43.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Detalles, Sorpresas y Regalos',
                'conf_subcat_imagen' => '44.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Hogar y Decoración',
                'conf_subcat_imagen' => '45.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Moda, Joyas  y Accesorios',
                'conf_subcat_imagen' => '46.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Partes y Accesorios vehículos',
                'conf_subcat_imagen' => '47.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()),
            array(
                'conf_subcat_cat_id' => '5',
                'conf_subcat_nombre' => 'Sex Shop',
                'conf_subcat_imagen' => '48.png',
                'conf_sub_cat_estatus' => '1',
                'created_at'=>new \DateTime(),'updated_at'=>new \DateTime())
        );
        ConfSubcategoria::insert($datos);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conf_subcategorias');
    }
}
