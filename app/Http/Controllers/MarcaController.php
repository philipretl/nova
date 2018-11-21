<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Marca;

use Validator;

class MarcaController extends Controller
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
     * Vista Principal Marcas
     *
     * @return vista
     */
    public function Index()
    {
        $url='GuardarMarca';
    	return view('Marcas.CrearMarcas',['url'=>$url]);
    }

    /**
     * Vista Principal Lista Marcas
     *
     * @return vista
     */
    public function ListarMarcas()
    {
        $lista_marcas=Marca::where('marca_estatus','!=',2)->get();
    	return view('Marcas.ListarMarcas',['ListaMarcas'=>$lista_marcas]);
    }

    /**
     * Proceso de Guardar Marca
     *
     * @return redirect
     */
    public function GuardarMarca(Request $request)
    {   
        $reglas = array(
            'marca_nombre' => 'required|unique:marcas,marca_nombre',
            'marca_direccion' => 'required',
            'marca_telefono' => 'required',
            'marca_imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        );
        $mensajes = array(
            'marca_nombre.required' => 'Nombre Requerido',
            'marca_nombre.unique' => 'Nombre Ya existe',
            'marca_direccion.required' => 'Direccion Requerido',
            'marca_telefono.required' => 'Telefono Requerido',
            'marca_imagen.required' => 'Selecciona una imagen (jpeg,png,jpg)'
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('CrearMarcas')->withErrors($validator)->withInput();
        }
        else
        {   
        	$marca_imagen = $request->file('marca_imagen');
            $input['imagen_marca'] = time().'.'.$marca_imagen->getClientOriginalExtension();
            $destinationPath = public_path('/img/marcas');
            $marca_imagen->move($destinationPath, $input['imagen_marca']);

            /* GUARDAR REGISTRO */
            $Marca = new Marca;
            $Marca->marca_nombre = $request->marca_nombre;
            $Marca->marca_imagen = $input['imagen_marca'];
            $Marca->marca_fecha_inicio = $request->marca_fecha_inicio;
            $Marca->marca_fecha_fin = $request->marca_fecha_fin;
            $Marca->marca_direccion = $request->marca_direccion;
            $Marca->marca_telefono = $request->marca_telefono;
            $Marca->marca_youtube = $request->marca_youtube;
            $Marca->marca_url = $request->marca_url;
            $Marca->marca_estatus = 1;
            $Marca->save();
            return redirect('ListarMarcas')->with('mensaje', 'Marca Guardada')
            ->with('tipo', 'success');
        }

    }

    /**
     * Eliminar Registro de Marca
     *
     * @return void
     */
    /*public function EliminarMarca(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $Marca = Marca::find($id);   
        $Marca->delete();
    }*/

    /**
     * Editar Registro de Marca
     *
     * @return view
     */
    public function MostrarMarca(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $Marca = Marca::find($id);

        $url='ActualizarMarca';
        return view('Marcas.CrearMarcas',['Marca'=>$Marca,'url'=>$url]);
    }

    /**
     * Actualizar Registro de Marca
     *
     * @return view
     */
    public function ActualizarMarca(Request $request)
    {   
        $Id=Crypt::decrypt($request->Id);
        $Marca = Marca::find($Id);

        $reglas = array(
            'marca_nombre' => 'required|unique:marcas,marca_nombre,'.$Id,
            'marca_direccion' => 'required',
            'marca_telefono' => 'required',
            'marca_imagen' => 'required_if:cambiar_imagen,1|image|mimes:jpeg,png,jpg|max:2048'
        );
        $mensajes = array(
            'marca_nombre.required' => 'Nombre Requerido',
            'marca_nombre.unique' => 'Nombre Ya existe',
            'marca_direccion.required' => 'Direccion Requerido',
            'marca_telefono.required' => 'Telefono Requerido',
            'marca_imagen.required_if' => 'Si presiona Cambiar Imagen, Debe Seleccionar una imagen (jpeg,png,jpg)'
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('MostrarMarca/'.$request->Id)->withErrors($validator)->withInput();
        }
        else
        {   
	        /* ACTUALIZADOS DATOS DE LA TABLA Marca*/
	        $Marca->fill(
	            array(
	                'marca_nombre' => $request->marca_nombre,
                    'marca_fecha_inicio' => $request->marca_fecha_inicio,
                    'marca_fecha_fin' => $request->marca_fecha_fin,
                    'marca_direccion' => $request->marca_direccion,
                    'marca_telefono' => $request->marca_telefono,
                    'marca_youtube' => $request->marca_youtube,
                    'marca_url' => $request->marca_url
	            )
	        );
	        $Marca->save();

	        if ($request->cambiar_imagen == 1){
                $marca_imagen = $request->file('marca_imagen');
                $input['imagen_marca'] = time().'.'.$marca_imagen->getClientOriginalExtension();
                $destinationPath = public_path('/img/marcas');
                $marca_imagen->move($destinationPath, $input['imagen_marca']);
                $Marca->fill(
                    array(
                        'marca_imagen' => $input['imagen_marca']
                    )
                );
                $Marca->save();
            }
	        return redirect('ListarMarcas')->with('mensaje', 'Marca Actualizado')
	            ->with('tipo', 'success');
	    }
    }
    public function EliminarMarca(Request $request)
    {   
        $id=Crypt::decrypt($request->id);
        $Marca = Marca::find($id); 
        $Marca->marca_estatus = 2;
        $Marca->save();
    }
}
