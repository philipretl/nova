<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    
    protected $fillable = ['empresa_nombre', 'empresa_empresario', 'empresa_nit', 'empresa_direccion', 'empresa_ciudad', 'empresa_pais', 'empresa_telefono_fijo', 'empresa_telefono_celular', 'empresa_email',  'empresa_web'];
}
