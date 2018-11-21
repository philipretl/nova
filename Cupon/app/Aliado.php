<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    protected $table = 'aliados';

    protected $fillable = ['aliado_tipo','aliado_nombres', 'aliado_apellidos', 'aliado_razon_social', 'aliado_nit', 'aliado_direccion', 'aliado_ciudad', 'aliado_pais', 'aliado_telefono_fijo', 'aliado_telefono_celular', 'aliado_email', 'aliado_web', 'aliado_descripcion', 'aliado_ofrece'];

    public function getFullNameAttribute()
	{
		if ($this->aliado_tipo == 1){
			return $this->aliado_nombres . " " . $this->aliado_apellidos;
		}
		if ($this->aliado_tipo == 2){
			return $this->aliado_razon_social;
		}
	    
	}
    
}














