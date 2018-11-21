<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\ConfCategoria;

use Validator;
use Auth;

class ConfiguracionController extends Controller
{
    
    public function ConfCategorias(){
    	$lista_categorias=ConfCategoria::all();
    	$url='GuardarCategoria';
    	return view('Configuracion.ConfCategorias',['url'=>$url,'ListaCategorias'=>$lista_categorias]);
    }

    /**
     * Proceso de Guardar Categoria
     *
     * @return redirect
     */
    public function GuardarCategoria(Request $request)
    {   
        $reglas = array(
            'nombre' => 'required|unique:conf_categorias,conf_cat_nombre',
            'condiciones' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        );
        $mensajes = array(
            'nombre.required' => 'Nombre Requerido',
            'nombre.unique' => 'Nombre Ya existe',
            'imagen.required' => 'Selecciona una imagen (jpeg,png,jpg)'
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('ConfCategorias')->withErrors($validator)->withInput();
        }
        else
        {   
        	$imagen = $request->file('imagen');
            $input['imagen_marca'] = time().'.'.$imagen->getClientOriginalExtension();
            $destinationPath = public_path('/img/categorias');
            $imagen->move($destinationPath, $input['imagen_marca']);

            /* GUARDAR REGISTRO */
            $Categoria = new ConfCategoria;
            $Categoria->conf_cat_nombre = $request->nombre;
            $Categoria->conf_cat_condiciones = $request->condiciones;
            $Categoria->conf_cat_imagen = $input['imagen_marca'];
            $Categoria->conf_cat_estatus = 1;
            $Categoria->save();
            return redirect('ConfCategorias')->with('mensaje', 'Categoria Guardada')
            ->with('tipo', 'success');
        }

    }

    /**
     * Editar Registro de Categoria
     *
     * @return view
     */
    public function MostrarCategoria(Request $request)
    {
    	$lista_categorias=ConfCategoria::all();
        $id=Crypt::decrypt($request->id);
        $ConfCategoria = ConfCategoria::find($id);

        $url='ActualizarCategoria';
        return view('Configuracion.ConfCategorias',['ConfCategoria'=>$ConfCategoria,'url'=>$url,'ListaCategorias'=>$lista_categorias]);
    }

    /**
     * Actualizar Registro de Categoria
     *
     * @return view
     */
    public function ActualizarCategoria(Request $request)
    {   
        $Id=Crypt::decrypt($request->Id);
        $Categoria = ConfCategoria::find($Id);

        $reglas = array(
            'nombre' => 'required|unique:conf_categorias,conf_cat_nombre,'.$Id,
            'condiciones' => 'required',
            'imagen' => 'required_if:cambiar_imagen,1|image|mimes:jpeg,png,jpg|max:2048'
        );
        $mensajes = array(
            'nombre.required' => 'Nombre Requerido',
            'nombre.unique' => 'Nombre Ya existe',
            'imagen.required_if' => 'Si presiona Cambiar Imagen, Debe Seleccionar una imagen (jpeg,png,jpg)'
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('MostrarCategoria/'.$request->Id)->withErrors($validator)->withInput();
        }
        else
        {   
	        /* ACTUALIZADOS DATOS DE LA TABLA Categoria*/
	        $Categoria->fill(
	            array(
	                'conf_cat_nombre' => $request->nombre,
	                'conf_cat_condiciones' => $request->condiciones
	            )
	        );
	        $Categoria->save();

	        if ($request->cambiar_imagen == 1){
                $imagen = $request->file('imagen');
                $input['imagen_marca'] = time().'.'.$imagen->getClientOriginalExtension();
                $destinationPath = public_path('/img/categorias');
                $imagen->move($destinationPath, $input['imagen_marca']);
                $Categoria->fill(
                    array(
                        'imagen' => $input['imagen_marca']
                    )
                );
                $Categoria->save();
            }
	        return redirect('ConfCategorias')->with('mensaje', 'Categoria Actualizada')
	            ->with('tipo', 'success');
	    }
	}
}
