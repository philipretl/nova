<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('users_nombre');
            $table->string('users_apellido')->nullable();
            $table->text('users_direccion')->nullable();
            $table->string('users_telefono')->nullable();
            $table->string('email',100)->unique();
            $table->string('password',300);
            $table->integer('users_tipo_usuario');
            $table->integer('users_estatus');
            $table->integer('users_aliado_id')->nullable()->unsigned();
            //$table->foreign('aliado_id')->references('id')->on('aliados')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });

        //INSERTAR USUARIO ADMIN
        $datos=array(
            array(
                'users_nombre' => 'SuperAdmin' ,
                'users_apellido' => '' ,
                'users_direccion' => '' ,
                'users_telefono' => '' ,
                'email' => 'superadmin@admin.com',
                'password' => bcrypt('12345678'),
                'users_tipo_usuario' => '1',
                'users_estatus' => '1',
                'users_aliado_id' => '0',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'users_nombre' => 'Admin' , 
                'users_apellido' => '',
                'users_direccion' => '' ,
                'users_telefono' => '' ,
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345678'),
                'users_tipo_usuario' => '2',
                'users_estatus' => '1',
                'users_aliado_id' => '0',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            ),
            array(
                'users_nombre' => 'Basico' , 
                'users_apellido' => '',
                'users_direccion' => '' ,
                'users_telefono' => '' ,
                'email' => 'basico@admin.com',
                'password' => bcrypt('12345678'),
                'users_tipo_usuario' => '3',
                'users_estatus' => '1',
                'users_aliado_id' => '0',
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()
            )
        );
        User::insert($datos);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
