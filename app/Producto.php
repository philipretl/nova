<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ProductoPrecio;
use App\Aliado;

use DB;

class Producto extends Model
{
    protected $table = 'productos';
    
    protected $fillable = ['producto_titulo', 'producto_categoria', 'producto_subcategoria', 'producto_marca', 'producto_aliado',  'producto_descripcion', 'producto_letra_chica', 'producto_email', 'producto_nit', 'producto_palabras_clave', 'producto_imagen', 'producto_estatus'];


    public function DatosCategoria()
    {
        return $this->belongsTo('App\ConfCategoria', 'producto_categoria', 'id');
    }

    public function DatosSubCategoria()
    {
        return $this->belongsTo('App\ConfSubcategoria', 'producto_subcategoria', 'id');
    }

    public function DatosMarca()
    {
        return $this->belongsTo('App\Marca', 'producto_marca', 'id');
    }

    public static function DatosAliado($id)
    {
        $datos = Aliado::where('id','=',$id)->first();
        return $datos;
    }

    public function Precios()
    {
        return $this->hasMany('App\ProductoPrecio', 'productop_id');
    }

    public function PreciosNoOfertas()
    {
        return $this->hasMany('App\ProductoPrecio', 'productop_id')
        ->where('productop_oferta',0)
        ->where('productop_estatus',1);
    }

    public function CantidadPrecios()
    {
        $id = $this->attributes['id'];
        return \App\ProductoPrecio::where('productop_id','=',$id)->count();
    }
    //@Philipretl
    public function Cantidad()
    {

      return $this->hasMany('App\ProductoPrecio', 'productop_id');

    }



    public function CantidadPreciosNoOfertas()
    {
        $id = $this->attributes['id'];
        return \App\ProductoPrecio::where('productop_id','=',$id)->where('productop_oferta',0)
        ->where('productop_estatus',1)->count();
    }

    public static function PrecioUno($id)
    {
        $datos = ProductoPrecio::where('productop_id','=',$id)->limit(1)->inRandomOrder()->first();
        return $datos;
    }

    public static function PorcentajeAlto($id)
    {
        $datos = ProductoPrecio::where('productop_id','=',$id)->orderBy('productop_descuento','DESC')->first();
        return $datos->productop_descuento;
    }

    public function Imagenes()
    {
        return $this->hasMany('App\ProductoImage', 'productoi_id');
    }

    public static function ImagenUno($id)
    {
        $datos = ProductoImage::where('productoi_id','=',$id)->limit(1)->inRandomOrder()->first();
        return $datos->productoi_url;
    }

}
