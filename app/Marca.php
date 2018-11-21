<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $fillable = ['marca_nombre', 'marca_imagen', 'marca_fecha_inicio','marca_fecha_fin','marca_direccion','marca_telefono','marca_youtube','marca_url', 'marca_estatus'];


}
