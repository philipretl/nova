<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ConfSubcategoria;

class ConfCategoria extends Model
{
    protected $table = 'conf_categorias';

    protected $fillable = ['conf_cat_nombre', 'conf_cat_condiciones', 'conf_cat_imagen', 'conf_cat_estatus'];

    public function SubCategorias()
    {
        return $this->hasMany('App\ConfSubcategoria', 'conf_subcat_cat_id');
    }

    public static function SubCategoriasLista($id)
	{
		$datos = ConfSubcategoria::where('conf_subcat_cat_id','=',$id)->get();
        return $datos;
	}
}


    