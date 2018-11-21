<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Empresa;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empresa_nombre',200);
            $table->string('empresa_empresario',150);
            $table->string('empresa_nit',30);
            $table->text('empresa_direccion')->nullable();
            $table->text('empresa_pais')->nullable();
            $table->text('empresa_ciudad')->nullable();
            $table->string('empresa_telefono_fijo',30)->nullable();
            $table->string('empresa_telefono_celular',30)->nullable();
            $table->string('empresa_email',100)->unique();
            $table->string('empresa_web',200);
            $table->timestamps();
        });

        //INSERTAR USUARIO ADMIN
        $datos=array(
            array(
                'empresa_nombre' => 'CUPONCITY COLOMBIA', 
                'empresa_empresario' => 'JULIO CÉSAR MAYA BASTIDAS',
                'empresa_nit' => '98385333-6',
                'empresa_direccion' => 'CARRERA 6 A Nº 23N 29 CIUDAD JARDÍN',
                'empresa_pais' => 'Colombia',
                'empresa_ciudad' => 'Calí',
                'empresa_telefono_fijo' => '8337031',
                'empresa_telefono_celular' => '3118490896',
                'empresa_email' => 'cuponcity.col@gmail.com',
                'empresa_web' => 'www.cuponcity.com.co',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            )
        );
        Empresa::insert($datos);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
