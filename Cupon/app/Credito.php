<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $table = 'creditos';
    
    protected $fillable = ['credito_users_id', 'credito_compra_codigo', 'credito_saldo','credito_fecha','credito_tipo','credito_descripcion'];

    public function DatosUsuario()
    {
        return $this->belongsTo('App\User', 'credito_users_id', 'id');
    }

    public function DatosCompra()
    {
        return $this->belongsTo('App\Compra', 'credito_compra_codigo', 'compra_codigo_compra');
    }

    public static function DatosCreditoCompraCodigo($codigo){
        return Credito::where('credito_compra_codigo', $codigo)->where('credito_tipo',2)->first();
    }
}
