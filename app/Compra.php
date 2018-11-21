<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Compra;
use DB;

class Compra extends Model
{
    protected $table = 'compras';
    
    protected $fillable = ['compra_codigo_compra', 'compra_codigo_hex', 'compra_codigo_entero', 'compra_users_id', 'compra_productop_id', 'compra_cantidad', 'compra_total', 'compra_oferta','compra_oferta_fecha_inicio','compra_oferta_fecha_fin','compra_estatus'];

   	public function DatosProductoPrecio()
    {
        return $this->belongsTo('App\ProductoPrecio', 'compra_productop_id', 'id');
    }

    public function DatosUsuario()
    {
        return $this->belongsTo('App\User', 'compra_users_id', 'id');
    }

    public function DatosCompraCodigo($codigo){
        return Compra::where('compra_codigo_compra', $codigo)->first();
    }

    /**
     * Procesar Cupones
     *
     * @return void
     */

    public static function CantProductosComprados($id){
        return Compra::where('compra_productop_id', $id)->count();
    }

    /**
     * Procesar Cupones
     *
     * @return void
     */

    public static function ProcesarCupones($id_User){
        return Compra::where('compra_estatus', 1)
          ->where('compra_users_id', $id_User)
          ->update(['compra_estatus' =>2]);
    }

    public static function ProcesarCuponesCredito($id_User){
        $CreditosDisponibles=Credito::
        select('credito_tipo', DB::raw('SUM(credito_saldo) as credito_saldo, credito_users_id'))
            ->where('credito_users_id',$id_User)
            ->where('credito_tipo',1)
            ->groupBy('credito_tipo')
            ->first();

        $CreditosUsados=Credito::
        select('credito_tipo', DB::raw('SUM(credito_saldo) as credito_saldo, credito_users_id'))
            ->where('credito_users_id',$id_User)
            ->where('credito_tipo',2)
            ->groupBy('credito_tipo')
            ->first();
        if ($CreditosDisponibles!=null){$CreditosDisponibles=$CreditosDisponibles->credito_saldo;}else{$CreditosDisponibles=0;}
        if ($CreditosUsados!=null){$CreditosUsados=$CreditosUsados->credito_saldo;}else{$CreditosUsados=0;}

        $CreditoTotal=$CreditosDisponibles-$CreditosUsados;

        $Compra=Compra::
        select('compra_codigo_compra', DB::raw('SUM(compra_cantidad * compra_total) as total, compra_users_id'))
            ->where('compra_users_id',$id_User)
            ->where('compra_estatus',1)
            ->groupBy('compra_codigo_compra')
            ->first();

        $CreditoSaldo=$CreditoTotal-$Compra->total;
        if ($CreditoSaldo<0){
            $CreditoSaldo=$CreditoTotal;
        }
        else{
            $CreditoSaldo=$Compra->total;
        }

        $Credito = new Credito;
        $Credito->credito_users_id = $id_User;
        $Credito->credito_compra_codigo = $Compra->compra_codigo_compra;
        $Credito->credito_saldo = $CreditoSaldo;
        $Credito->credito_fecha = fecha();
        $Credito->credito_tipo = 2;
        $Credito->credito_descripcion = 'Uso de Crédito de Compra de Producto';
        $Credito->save();


        return Compra::where('compra_estatus', 1)
          ->where('compra_users_id', $id_User)
          ->update(['compra_estatus' =>2]);
    }

    /**
     * Procesar Cupones
     *
     * @return void
     */

    public static function ProcesarCuponesSinConcretar($idCompra){
        return Compra::where('id', $idCompra)
        ->where('compra_estatus','!=', 5)
        ->update(['compra_estatus' =>5]);
    }
}
