<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Producto;
use App\ProductoPrecio;

use Validator;

class OfertaController extends Controller
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

    /**
     * Vista Principal Ofertas
     *
     * @return vista
     */
    public function Index()
    {
        $url='GuardarOferta';
        $Producto=Producto::all();
        $Producto = $Producto->pluck('producto_titulo', 'id');
    	return view('Ofertas.CrearOfertas',['url'=>$url,'Producto'=>$Producto]);
    }

    /**
     * Vista Principal Lista Ofertas
     *
     * @return vista
     */
    public function ListarOfertas()
    {
       $lista_ofertas=ProductoPrecio::where('productop_oferta',1)->get();
    	return view('Ofertas.ListarOfertas',['ListaOfertas'=>$lista_ofertas]);
    }

    /**
     * Proceso de Guardar Oferta
     *
     * @return redirect
     */
    public function GuardarOferta(Request $request)
    {   
        $reglas = array(
            'productop_id' => 'required',
            'productop_cantidad' => 'required',
            'productop_total' => 'required',
            'productop_descuento' => 'required',
            'productop_total_descuento' => 'required',
            'productop_fecha_inicio' => 'required',
            'productop_fecha_fin' => 'required'
        );
        $mensajes = array(
            'productop_id.required' => 'Producto Requerido',
            'productop_cantidad.required' => 'Cantidad Requerida',
            'productop_total.required' => 'Total Requerido',
            'productop_descuento.required' => 'Descuento Requerido',
            'productop_total_descuento.required' => 'Total de Descuento Requerido',
            'productop_fecha_inicio.required' => 'Fecha de Inicio Requerido',
            'productop_fecha_fin.required' => 'Fecha Fin Requerido',
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('CrearOfertas')->withErrors($validator)->withInput();
        }
        else
        {   
            if ($request->productop_slider==""){$productop_slider=0;}else{$productop_slider=1;}
            /* GUARDAR REGISTRO */
            $ProductoPrecio = new ProductoPrecio;
            $ProductoPrecio->productop_id = $request->productop_id;
            $ProductoPrecio->productop_titulo = '';
            $ProductoPrecio->productop_total = $request->productop_total;
            $ProductoPrecio->productop_descuento = $request->productop_descuento;
            $ProductoPrecio->productop_total_descuento = $request->productop_total_descuento;
            $ProductoPrecio->productop_fecha_inicio = $request->productop_fecha_inicio;
            $ProductoPrecio->productop_fecha_fin = $request->productop_fecha_fin;
            $ProductoPrecio->productop_slider = $productop_slider;
            $ProductoPrecio->productop_cantidad = $request->productop_cantidad;
            $ProductoPrecio->productop_oferta = 1;
            $ProductoPrecio->productop_estatus = 1;
            $ProductoPrecio->save();
            
            return redirect('ListarOfertas')->with('mensaje', 'Oferta Guardada')
            ->with('tipo', 'success');
        }

    }

    /**
     * Eliminar Registro de Oferta
     *
     * @return void
     */
    public function EliminarOferta(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $ProductoPrecio = ProductoPrecio::find($id);   
        $ProductoPrecio->delete();
    }

    /**
     * Editar Registro de Oferta
     *
     * @return view
     */
    public function MostrarOferta(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $ProductoPrecio = ProductoPrecio::find($id);

        $Producto=Producto::all();
        $Producto = $Producto->pluck('producto_titulo', 'id');

        $url='ActualizarOferta';
        return view('Ofertas.CrearOfertas',['Oferta'=>$ProductoPrecio,'url'=>$url,
    	'Producto'=>$Producto]);
    }

    /**
     * Actualizar Registro de Oferta
     *
     * @return view
     */
    public function ActualizarOferta(Request $request)
    {   
        $Id=Crypt::decrypt($request->Id);
        $ProductoPrecio = ProductoPrecio::find($Id);

        $reglas = array(
            'productop_id' => 'required',
            'productop_cantidad' => 'required',
            'productop_total' => 'required',
            'productop_descuento' => 'required',
            'productop_total_descuento' => 'required',
            'productop_fecha_inicio' => 'required',
            'productop_fecha_fin' => 'required'
        );
        $mensajes = array(
            'productop_id.required' => 'Producto Requerido',
            'productop_cantidad.required' => 'Cantidad Requerida',
            'productop_total.required' => 'Total Requerido',
            'productop_descuento.required' => 'Descuento Requerido',
            'productop_total_descuento.required' => 'Total de Descuento Requerido',
            'productop_fecha_inicio.required' => 'Fecha de Inicio Requerido',
            'productop_fecha_fin.required' => 'Fecha Fin Requerido',
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('MostrarOferta/'.$request->Id)->withErrors($validator)->withInput();
        }
        else
        {   
            if ($request->productop_slider==""){$productop_slider=0;}else{$productop_slider=1;}
	        /* ACTUALIZADOS DATOS DE LA TABLA Oferta*/
	        $ProductoPrecio->fill(
	            array(
	                'productop_id' => $request->productop_id,
                    'productop_cantidad' => $request->productop_cantidad,
	                'productop_total' => $request->productop_total,
	                'productop_descuento' => $request->productop_descuento,
	                'productop_total_descuento' => $request->productop_total_descuento,
	                'productop_fecha_inicio' => $request->productop_fecha_inicio,
	                'productop_fecha_fin' => $request->productop_fecha_fin,
                    'productop_slider' => $productop_slider,
                    'productop_estatus' => 1
	            )
	        );
	        $ProductoPrecio->save();
	        return redirect('ListarOfertas')->with('mensaje', 'Oferta Actualizado')
	            ->with('tipo', 'success');
	    }
    }
}
