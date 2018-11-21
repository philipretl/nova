<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Compra;
use App\ProductoPrecio;
use App\User;
use App\Credito;

use Auth;
use Mail;
use DB;

class CompraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function Index()
    {

        $CreditosDisponibles=Credito::
        select('credito_tipo', DB::raw('SUM(credito_saldo) as credito_saldo, credito_users_id'))
            ->where('credito_users_id',Auth::id())
            ->where('credito_tipo',1)
            ->groupBy('credito_tipo')
            ->first();

        $CreditosUsados=Credito::
        select('credito_tipo', DB::raw('SUM(credito_saldo) as credito_saldo, credito_users_id'))
            ->where('credito_users_id',Auth::id())
            ->where('credito_tipo',2)
            ->groupBy('credito_tipo')
            ->first();
        if ($CreditosDisponibles!=null){$CreditosDisponibles=$CreditosDisponibles->credito_saldo;}else{$CreditosDisponibles=0;}
        if ($CreditosUsados!=null){$CreditosUsados=$CreditosUsados->credito_saldo;}else{$CreditosUsados=0;}

        $CreditoTotal=$CreditosDisponibles-$CreditosUsados;
        $Compra = Compra::where('compra_users_id',Auth::id())->where('compra_estatus',1)->get();

        return view('Compras',['Compra'=>$Compra,'CreditoTotal'=>$CreditoTotal]);
    }

    public function GuardarCompras(Request $request){

        $CantProductos = Compra::where('compra_users_id',Auth::id())->where('compra_estatus',1)->count();
        $Existencia=0;

        if ($request->compra_productop_id!=""){
        	$ProductoPrecio = ProductoPrecio::find($request->compra_productop_id);
            $Existencia = $Existencia = $ProductoPrecio->productop_cantidad;
            if ($ProductoPrecio->productop_cantidad>0)
            {
            	if ($ProductoPrecio->productop_estatus==1)
            	{
                    if (!isset(\Auth::user()->id))
                    {
                        $Mensaje=['mensaje'=>'Debes Iniciar Sesión','tipo'=>'warning','cantidad'=>$CantProductos,'error'=>1,'existencia'=>$Existencia];
                    }
                    else
                    {
                		$CompraAbierta = Compra::where('compra_estatus',1)->where('compra_users_id',Auth::id())->first();
                		if ($CompraAbierta==null){$compra_codigo_compra=GenerarCodCompra();}
                		else{$compra_codigo_compra=$CompraAbierta->compra_codigo_compra;}


                        $ProductoEnLista = Compra::where('compra_estatus',1)->where('compra_users_id',Auth::id())->where('compra_codigo_compra',$compra_codigo_compra)->where('compra_productop_id',$request->compra_productop_id)->first();

                        if(count($ProductoEnLista)>0){
                            $CompraExiste = $ProductoEnLista->id;
                            $Anadir = $ProductoEnLista->compra_cantidad+1;
                            $Compra = Compra::find($CompraExiste);
                            $Compra->fill(
                                array(
                                    'compra_cantidad' => $Anadir
                                )
                            );
                            $Compra->save();
                        }
                        else{
                            $compra_cantidad=1;

                    		$compra_codigo_entero=GenerarCodCompraEntero();
                    		$compra_codigo_hex=GenerarCodCompraHex();

            	        	$Compra = new Compra;
            	            $Compra->compra_codigo_compra = $compra_codigo_compra;
            	            $Compra->compra_codigo_hex = $compra_codigo_hex;
            	            $Compra->compra_codigo_entero = $compra_codigo_entero;
            	            $Compra->compra_users_id = Auth::id();
            	            $Compra->compra_productop_id = $request->compra_productop_id;
                            $Compra->compra_cantidad = $compra_cantidad;
            	            $Compra->compra_total = $ProductoPrecio->productop_total_descuento;
            	            $Compra->compra_oferta = $ProductoPrecio->productop_oferta;
            	            $Compra->compra_oferta_fecha_inicio = $ProductoPrecio->productop_fecha_inicio;
            	            $Compra->compra_oferta_fecha_fin = $ProductoPrecio->productop_fecha_fin;
            	            $Compra->compra_estatus = 1;
            	            $Compra->save();
                        }

                        $Existencia = $Existencia - 1;
                        $ProductoPrecio->fill(
                            array(
                                'productop_cantidad' => $Existencia
                            )
                        );
                        $ProductoPrecio->save();

                        $CantProductos++;
        	            $Mensaje=['mensaje'=>'Añadido al Carrito','tipo'=>'success','cantidad'=>$CantProductos,'error'=>0,'existencia'=>$Existencia];
                    }
            	}
            	elseif ($ProductoPrecio->productop_estatus==0)
            	{
    	            $Mensaje=['mensaje'=>'El Producto ha sido removido','tipo'=>'error','cantidad'=>$CantProductos,'error'=>2,'existencia'=>$Existencia];
            	}
            	elseif ($ProductoPrecio->productop_estatus==2)
            	{
    	            $Mensaje=['mensaje'=>'La Oferta del Producto se ha vencido','tipo'=>'error','cantidad'=>$CantProductos,'error'=>3,'existencia'=>$Existencia];
            	}
            }
            else{
                $Mensaje=['mensaje'=>'No hay unidades disponibles','tipo'=>'error','cantidad'=>$CantProductos,'error'=>4,'existencia'=>$Existencia];
            }
        }
        else{
                $Mensaje=['mensaje'=>'Seleccione un Producto','tipo'=>'error','cantidad'=>$CantProductos,'error'=>5,'existencia'=>$Existencia];
        }
            return response()->json($Mensaje);
    }



    /**
     * Cambiar Cantidad de Producto
     *
     * @return void
     */
    public function CantidadCompra(Request $request){
        $Compra = Compra::find($request->id);
        $ProductoPrecio = ProductoPrecio::find($Compra->compra_productop_id);

        $CantidadProducto=$Compra->compra_cantidad;
        $Cantidad = $request->cantidad;

        if ($Cantidad>$CantidadProducto){
            $CantReal=$Cantidad-$CantidadProducto;    
            $Existencia = $ProductoPrecio->productop_cantidad - $CantReal;
        }
        else{
            $CantReal=$Cantidad-$CantidadProducto;
            $CantReal=abs($CantReal);
            $Existencia = $ProductoPrecio->productop_cantidad + $CantReal;
        }

            $ProductoPrecio->fill(
                array(
                    'productop_cantidad' => $Existencia
                )
            );
            $ProductoPrecio->save();

            $Compra->fill(
                array(
                    'compra_cantidad' => $Cantidad
                )
            );
            $Compra->save();
    }

    /**
     * Eliminar Registro de Producto
     *
     * @return void
     */
    public function EliminarCompra(Request $request){
        $id=Crypt::decrypt($request->id);

        $Compra = Compra::find($id);   
        $ProductoPrecio = ProductoPrecio::find($Compra->compra_productop_id);      

        $CantidadProducto=$Compra->compra_cantidad;

        $Existencia = $ProductoPrecio->productop_cantidad + $CantidadProducto;
        $ProductoPrecio->fill(
            array(
                'productop_cantidad' => $Existencia
            )
        );
        $ProductoPrecio->save();
        $Compra->delete();
    }

    public function DevolucionCompra(Request $request){
        $id=Crypt::decrypt($request->id);

        $Compra = Compra::find($id);   
        $ProductoPrecio = ProductoPrecio::find($Compra->compra_productop_id); 

        $CantidadProducto=$Compra->compra_cantidad;

        $Existencia = $ProductoPrecio->productop_cantidad + $CantidadProducto;
        $ProductoPrecio->fill(
            array(
                'productop_cantidad' => $Existencia
            )
        );
        $ProductoPrecio->save();
        $Compra->fill(
            array(
                'compra_estatus' => 4
            )
        );
        $Compra->save();

        $Credito = new Credito;
        $Credito->credito_users_id = $Compra->compra_users_id;
        $Credito->credito_compra_codigo = $Compra->compra_codigo_compra;
        $Credito->credito_saldo = $Compra->compra_cantidad * $Compra->compra_total;
        $Credito->credito_fecha = fecha();
        $Credito->credito_tipo = 1;
        $Credito->credito_descripcion = 'Devolución de Compra de Producto';
        $Credito->save();
    }
    

    /**
     * Tus Cupones
     *
     * @return void
     */
    public function TusCupones(Request $request){

        $Compra = Compra::where('compra_users_id',Auth::id())
        ->where('compra_estatus',2)
        ->orWhere('compra_estatus',3)
        ->orderBy('created_at','DESC')->get();
        return view('TusCupones',['Compra'=>$Compra]);
    }


    /**
     * Vista Principal Lista Compras
     *
     * @return vista
     */
    public function ListarCompras($id)
    {
        $lista_compras=Compra::where('compra_estatus',$id)->get();
        if ($id == 1){$titulo = 'En el Carrito';}
        if ($id == 2){$titulo = 'Procesadas';}
        if ($id == 3){$titulo = 'Pagadas';}
        if ($id == 4){$titulo = 'Devueltas';}
        if ($id == 5){$titulo = 'Sin Concretar';}
        return view('Compras.ListarCompras',['ListarCompras'=>$lista_compras,'Titulo'=>$titulo,'Id'=>$id]);
    }

    /**
     * Vista Principal Lista Devoluciones
     *
     * @return vista
     */
    public function ListarCreditos(Request $request)
    {
        $listar_creditos=Credito::all();
        return view('Compras.ListarCreditos',['ListarCreditos'=>$listar_creditos]);
    }

}
