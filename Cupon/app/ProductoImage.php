<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImage extends Model
{
    protected $table = 'producto_images';
    
    protected $fillable = ['productoi_id', 'productoi_url'];

   	public function DatosProducto()
    {
        return $this->belongsTo('App\Producto', 'productoi_id', 'id');
    }
}
