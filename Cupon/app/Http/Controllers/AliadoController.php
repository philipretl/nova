<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Aliado;

use Validator;
use Auth;

class AliadoController extends Controller
{
    
    /**
     * Vista Principal Ayudas
     *
     * @return vista
     */
    public function Index()
    {
        $url='GuardarAliado';
        return view('Aliados.CrearAliados',['url'=>$url]);
    }

    /**
     * Vista Principal Lista Aliados
     *
     * @return vista
     */
    public function ListarAliados()
    {
        $lista_aliados=Aliado::all();
        return view('Aliados.ListarAliados',['ListarAliados'=>$lista_aliados]);
    }

    /**
     * Guardar Aliados
     *
     * @return vista
     */

    public function GuardarAliado(Request $request)
    {
        $reglas = array(
            'aliado_tipo' => 'required',
            'aliado_nit' => 'required|unique:aliados',
            'aliado_telefono_fijo' => 'required',
            'aliado_telefono_celular' => 'required',
            'aliado_descripcion' => 'required',
            'aliado_ofrece' => 'required',
            'aliado_email' => 'required|unique:aliados',
        );
        $mensajes = array(
            'aliado_tipo.required' => 'Tipo de Aliado Requerido',
            'aliado_nit.required'  => 'Ingrese el NIT',
            'aliado_nit.unique'  => 'El NIT ya se encuentra registrado',
            'aliado_telefono_fijo.required'  => 'Teléfono Fijo Requerido',
            'aliado_telefono_celular.required'  => 'Teléfono Celular Requerido',
            'aliado_descripcion.required'  => 'Descripción Requerida',
            'aliado_ofrece.required'  => 'Ingrese que ofrece',
            'aliado_email.required'  => 'Ingrese el Email',
            'aliado_email.unique'  => 'El Email ya se encuentra registrado',
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('CrearAliados')->withErrors($validator)->withInput();
        }
        else
        {          
            /* GUARDAR REGISTRO */
            $Aliado = new Aliado;
            $Aliado->aliado_tipo = $request->aliado_tipo;
            $Aliado->aliado_nombres = $request->aliado_nombres;
            $Aliado->aliado_apellidos = $request->aliado_apellidos;
            $Aliado->aliado_razon_social = $request->aliado_razon_social;
            $Aliado->aliado_nit = $request->aliado_nit;
            $Aliado->aliado_direccion = $request->aliado_direccion;
            $Aliado->aliado_ciudad = $request->aliado_ciudad;
            $Aliado->aliado_pais = $request->aliado_pais;
            $Aliado->aliado_telefono_fijo = $request->aliado_telefono_fijo;
            $Aliado->aliado_telefono_celular = $request->aliado_telefono_celular;
            $Aliado->aliado_email = $request->aliado_email;
            $Aliado->aliado_web = $request->aliado_web;
            $Aliado->aliado_descripcion = $request->aliado_descripcion;
            $Aliado->aliado_ofrece = $request->aliado_ofrece;
            $Aliado->save();
            $IdAliado = $Aliado->id;

            Mail::send('Email.BodyEmail', ['Datos' => $Aliado,'tipo'=>'Aliado'], 
            function ($mail) {
                //$mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $mail->to('aliados@cuponcity.com.co', 'Correo de Aliados')->subject('Se ha registrado un aliado');
            });
         
            return redirect('ListarAliados')->with('mensaje', 'Aliado Guardado')->with('tipo', 'success');        
        }
    }

    /**
     * Editar Registro de Aliado
     *
     * @return view
     */
    public function MostrarAliado(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $Aliado = Aliado::find($id);
        $url='ActualizarAliado';
        return view('Aliados.CrearAliados',['Aliado'=>$Aliado,'url'=>$url]);
    }

     /**
     * Actualizar Aliado
     *
     * @return vista
     */

    public function ActualizarAliado(Request $request)
    {
        $id=Crypt::decrypt($request->Id);
        $reglas = array(
            'aliado_tipo' => 'required',
            'aliado_nit' => 'required|unique:aliados,aliado_nit,'.$id,
            'aliado_telefono_fijo' => 'required',
            'aliado_telefono_celular' => 'required',
            'aliado_descripcion' => 'required',
            'aliado_ofrece' => 'required',
            'aliado_email' => 'required|unique:aliados,aliado_email,'.$id,
        );
        $mensajes = array(
            'aliado_tipo.required' => 'Tipo de Aliado Requerido',
            'aliado_nit.required'  => 'Ingrese el NIT',
            'aliado_nit.unique'  => 'El NIT ya se encuentra registrado',
            'aliado_telefono_fijo.required'  => 'Teléfono Fijo Requerido',
            'aliado_telefono_celular.required'  => 'Teléfono Celular Requerido',
            'aliado_descripcion.required'  => 'Descripción Requerida',
            'aliado_ofrece.required'  => 'Ingrese que ofrece',
            'aliado_email.required'  => 'Ingrese el Email',
            'aliado_email.unique'  => 'El Email ya se encuentra registrado',
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('MostrarAliado/'.$request->Id)->withErrors($validator)->withInput();
        }
        else
        {          
            $Aliado = Aliado::find($id);
            $Aliado->aliado_tipo = $request->aliado_tipo;
            $Aliado->aliado_nombres = $request->aliado_nombres;
            $Aliado->aliado_apellidos = $request->aliado_apellidos;
            $Aliado->aliado_razon_social = $request->aliado_razon_social;
            $Aliado->aliado_nit = $request->aliado_nit;
            $Aliado->aliado_direccion = $request->aliado_direccion;
            $Aliado->aliado_ciudad = $request->aliado_ciudad;
            $Aliado->aliado_pais = $request->aliado_pais;
            $Aliado->aliado_telefono_fijo = $request->aliado_telefono_fijo;
            $Aliado->aliado_telefono_celular = $request->aliado_telefono_celular;
            $Aliado->aliado_email = $request->aliado_email;
            $Aliado->aliado_web = $request->aliado_web;
            $Aliado->aliado_descripcion = $request->aliado_descripcion;
            $Aliado->aliado_ofrece = $request->aliado_ofrece;
            $Aliado->save();
            $IdAliado = $Aliado->id;
         
            return redirect('ListarAliados')->with('mensaje', 'Aliado Actualizado')->with('tipo', 'success');       
        }
    }

    /**
     * Eliminar Registro de Aliado
     *
     * @return void
     */
    public function EliminarAliado(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $Aliado = Aliado::find($id);   
        $Aliado->delete();
    }
}
