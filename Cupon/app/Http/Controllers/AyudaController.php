<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Ayuda;
use App\AyudaCategoria;
use App\AyudaDetalle;

use Validator;

class AyudaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Vista Principal Ayudas
     *
     * @return vista
     */
    public function Index()
    {
        $url='GuardarAyuda';
        $Categoria=AyudaCategoria::all();
        $Categoria = $Categoria->pluck('ayudas_cat_nombre', 'id');
    	return view('Ayudas.CrearAyudas',['url'=>$url,'Categoria'=>$Categoria]);
    }

    /**
     * Vista Principal Lista Ayudas
     *
     * @return vista
     */
    public function ListarAyudas()
    {
        $lista_ayuda=Ayuda::all();
    	return view('Ayudas.ListarAyudas',['ListaAyudas'=>$lista_ayuda]);
    }

    /**
     * Vista Principal Lista Ayudas
     *
     * @return vista
     */
    public function ListarAyudasDetalles()
    {
        $lista_ayuda_total =AyudaDetalle::groupBy('ayudas_id')->get();
        $lista_ayuda=AyudaDetalle::all();
        return view('Ayudas.ListarAyudasDetalles',['ListaAyudas'=>$lista_ayuda,'ListaAyudasTodo'=>$lista_ayuda_total]);
    }

    /**
     * Proceso de Guardar Ayuda
     *
     * @return redirect
     */
    public function GuardarAyuda(Request $request)
    {   
        $reglas = array(
            'ayudas_cat_id' => 'required',
            'ayudas_titulo' => 'required',
            'ayudas_descripcion' => 'required'
        );
        $mensajes = array(
            'ayudas_titulo.required' => 'Titulo Requerido',
            'ayudas_cat_id.required' => 'Categoria Requerida',
            'ayudas_descripcion.required' => 'Descripción Requerida'
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('CrearAyudas')->withErrors($validator)->withInput();
        }
        else
        {   
            /* GUARDAR REGISTRO */
            $Ayuda = new Ayuda;
            $Ayuda->ayudas_cat_id = $request->ayudas_cat_id;
            $Ayuda->ayudas_titulo = $request->ayudas_titulo;
            $Ayuda->ayudas_descripcion = $request->ayudas_descripcion;
            $Ayuda->ayudas_estatus = 1;
            $Ayuda->save();
            return redirect('ListarAyudas')->with('mensaje', 'Ayuda Guardada')
            ->with('tipo', 'success');
        }

    }

    /**
     * Eliminar Registro de Ayuda
     *
     * @return void
     */
    public function EliminarAyuda(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $Ayuda = Ayuda::find($id);   
        $Ayuda->delete();
    }

    /**
     * Editar Registro de Ayuda
     *
     * @return view
     */
    public function MostrarAyuda(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $Ayuda = Ayuda::find($id);

        $Categoria=AyudaCategoria::all();
        $Categoria = $Categoria->pluck('ayudas_cat_nombre', 'id');

        $url='ActualizarAyuda';
        return view('Ayudas.CrearAyudas',['Ayuda'=>$Ayuda,'url'=>$url,'Categoria'=>$Categoria]);
    }

    /**
     * Actualizar Registro de Ayuda
     *
     * @return view
     */
    public function ActualizarAyuda(Request $request)
    {   
        $Id=Crypt::decrypt($request->Id);
        $Ayuda = Ayuda::find($Id);

        $reglas = array(
            'ayudas_cat_id' => 'required',
            'ayudas_titulo' => 'required',
            'ayudas_descripcion' => 'required'
        );
        $mensajes = array(
            'ayudas_titulo.required' => 'Titulo Requerido',
            'ayudas_cat_id.required' => 'Categoria Requerida',
            'ayudas_descripcion.required' => 'Descripción Requerida'
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('MostrarAyuda/'.$request->Id)->withErrors($validator)->withInput();
        }
        else
        {   
	        /* ACTUALIZADOS DATOS DE LA TABLA Ayuda*/
	        $Ayuda->fill(
	            array(
	                'ayudas_cat_id' => $request->ayudas_cat_id,
                    'ayudas_titulo' => $request->ayudas_titulo,
                    'ayudas_descripcion' => $request->ayudas_descripcion
	            )
	        );
	        $Ayuda->save();
	        return redirect('ListarAyudas')->with('mensaje', 'Ayuda Actualizado')
	            ->with('tipo', 'success');
	    }
    }

    /**
     * Ajax para traer informacion de ayuda
     *
     * @return json
     */
    public function Ayuda_Select(Request $request)
    {
        $id=$request->id;
        $ListaAyudas = AyudaCategoria::ListaAyudas($id);

        if (count($ListaAyudas)==0){
            $datosjson=0;
        }else{
            foreach ($ListaAyudas as $valor) {
                    $datosjson[]=array('id' => $valor->id ,'text' => $valor->ayudas_titulo);
            }
        }
        return response()->json($datosjson);
    }
}
