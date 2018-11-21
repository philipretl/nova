<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayuda extends Model
{
    protected $table = 'ayudas';

    protected $fillable = ['ayudas_cat_id', 'ayudas_titulo', 'ayudas_descripcion', 'ayudas_estatus'];

    public function DatosCategoriaAyuda()
    {
        return $this->belongsTo('App\AyudaCategoria', 'ayudas_cat_id', 'id');
    }
}
