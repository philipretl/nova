<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\AyudaDetalle;

class AyudaDetalle extends Model
{
    protected $table = 'ayudas_detalles';

    protected $fillable = ['ayudas_id', 'ayudas_detalles_util', 'ayudas_users_id', 'ayudas_ip'];

    public function DatosAyuda()
    {
        return $this->belongsTo('App\Ayuda', 'ayudas_id', 'id');
    }

    public function DatosUsuario()
    {
        return $this->belongsTo('App\User', 'ayudas_users_id', 'id');
    }

    public static function CantidadSI($ayudas_id){
        return $cant =AyudaDetalle::where('ayudas_id',$ayudas_id)
        ->where('ayudas_detalles_util',1)->count();
    }

    public static function CantidadNO($ayudas_id){
        return $cant =AyudaDetalle::where('ayudas_id',$ayudas_id)
        ->where('ayudas_detalles_util',0)->count();
    }
}
