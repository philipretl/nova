<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoPrecio extends Model
{
    protected $table = 'producto_precios';
    
    protected $fillable = ['productop_id', 'productop_titulo', 'productop_total', 'productop_descuento', 'productop_total_descuento','productop_fecha_inicio','productop_fecha_fin','productop_slider','productop_oferta','productop_cantidad','productop_estatus'];

   	public function DatosProducto()
    {
        return $this->belongsTo('App\Producto', 'productop_id', 'id');
    }
}
