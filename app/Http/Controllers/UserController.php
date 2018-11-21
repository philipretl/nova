<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\User;
use App\Aliado;

use Validator;

class UserController extends Controller
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
     * Vista Principal Usuarios
     *
     * @return vista
     */
    public function Index()
    {
        $url='GuardarUsuario';
    	return view('Usuarios.CrearUsuarios',['url'=>$url]);
    }

    /**
     * Vista Principal Lista Usuarios
     *
     * @return vista
     */
    public function ListarUsuarios()
    {
        $lista_usuarios=User::where('id','!=','1')->get();
    	return view('Usuarios.ListarUsuarios',['ListaUsuarios'=>$lista_usuarios]);
    }

    /**
     * Proceso de Guardar Usuario
     *
     * @return redirect
     */
    public function GuardarUsuario(Request $request)
    {   
        $reglas = array(
            'users_nombre' => 'required',
            'users_apellido' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        );
        $mensajes = array(
            'users_nombre.required' => 'Nombre Requerido',
            'users_apellido.required' => 'Apellido Requerido',
            'email.required'  => 'Ingrese el Email',
            'email.unique'  => 'El Email ya se encuentra registrado',
            'password.required'  => 'Ingrese Contraseña',
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('CrearUsuarios')->withErrors($validator)->withInput();
        }
        else
        {   
            /* GUARDAR REGISTRO */
            $User = new User;
            $User->users_nombre = $request->users_nombre;
            $User->users_apellido = $request->users_apellido;
            $User->email = $request->email;
            $User->users_telefono = $request->users_telefono;
            $User->password = bcrypt($request->password);
            $User->users_tipo_usuario = 2;
            $User->users_estatus = 1;
            $User->users_aliado_id = 0;
            $User->save();

            $user = User::findOrFail($User->id);
            Mail::send('Email.BodyEmail', ['user' => $user,'tipo'=>'RegistroUsuario'], 
            function ($mail) use ($user) {
                $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $mail->to($user->email, $user->users_nombre)->subject('Registro en '.config('app.name'));
            });

            return redirect('ListarUsuarios')->with('mensaje', 'Usuario Guardado')
            ->with('tipo', 'success');
        }

    }

    /**
     * Eliminar Registro de Usuario
     *
     * @return void
     */
    public function EliminarUsuario(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $User = User::find($id);   
        $User->delete();
    }

    /**
     * Editar Registro de Usuario
     *
     * @return view
     */
    public function MostrarUsuario(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $User = User::find($id);

        $url='ActualizarUsuario';
        return view('Usuarios.CrearUsuarios',['User'=>$User,'url'=>$url]);
    }

    /**
     * Actualizar Registro de Usuario
     *
     * @return view
     */
    public function ActualizarUsuario(Request $request)
    {   
        $Id=Crypt::decrypt($request->Id);
        $User = User::find($Id);

        /* ACTUALIZADOS DATOS DE LA TABLA User*/
        $User->fill(
            array(
                'users_nombre' => $request->users_nombre,
                'users_apellido' => $request->users_apellido,
                'users_telefono' => $request->users_telefono
            )
        );
        $User->save();
        return redirect('ListarUsuarios')->with('mensaje', 'Usuario Actualizado')
            ->with('tipo', 'success');
    }
}
