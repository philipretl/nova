<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ayuda;

class AyudaCategoria extends Model
{
    protected $table = 'ayudas_categorias';

    protected $fillable = ['ayudas_cat_nombre', 'ayudas_cat_imagen', 'ayudas_cat_estatus'];

    public function ExistenAyudas()
	{
        $id = $this->attributes['id'];
        $reg = Ayuda::where('ayudas_cat_id','=',$id)->count();
        return $reg;
 	}

 	public function TodasAyudas()
	{
        $id = $this->attributes['id'];
        $lista = Ayuda::where('ayudas_cat_id','=',$id)->get();
        return $lista;
 	}

    public static function ListaAyudas($id)
    {
        $datos = Ayuda::where('ayudas_cat_id','=',$id)->get();
        return $datos;
    }

}
