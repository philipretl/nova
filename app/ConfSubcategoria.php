<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfSubcategoria extends Model
{
    protected $table = 'conf_subcategorias';

    protected $fillable = ['conf_subcat_cat_id', 'conf_subcat_nombre', 'conf_sub_cat_estatus'];


    public function DatosCategoria()
    {
        return $this->belongsTo('App\ConfCategoria', 'conf_subcat_cat_id', 'id');
    }
}