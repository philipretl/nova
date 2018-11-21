<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DB;

use App\ConfCategoria;
use App\ConfSubcategoria;
use App\Ayuda;
use App\AyudaDetalle;
use App\AyudaCategoria;
use App\Aliado;
use App\User;
use App\Marca;
use App\Producto;
use App\ProductoPrecio;
use App\Credito;
use App\Suscripcion;

use Validator;
use Auth;
use Hash;
use Mail;


class PrincipalController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Cambiar Estatus a Cualquier Registro
     *
     * @return json
     */
    public function CambiarEstatus(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        @$id_campo=$request->id_campo;
        if ($id_campo==""){$id_campo='id';}

        $affected = DB::update('UPDATE '.$request["tabla"].' SET '.$request["campo"].' = '.$request["estatus"].' where '.$id_campo.' = '.$id);
        return response()->json($affected);
    }

    /**
     * Borrar Cualquier Registro
     *
     * @return json
     */
    public function EliminarRegistro(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $affected = DB::update('DELETE FROM '.$request["tabla"].' where id = '.$id);
        return response()->json($affected);
    }

    public function CrearCityCuenta()
    {
        return view('CrearCityCuenta');
    }

    public function register(Request $request)
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
            return redirect('CrearCityCuenta')->withErrors($validator)->withInput();
        }
        else
        {          
            /* GUARDAR REGISTRO */
            $User = new User;
            $User->users_nombre = $request->users_nombre;
            $User->users_apellido = $request->users_apellido;
            $User->users_direccion = $request->users_direccion;
            $User->users_telefono = $request->users_telefono;
            $User->email = $request->email;
            $User->password = bcrypt($request->password);
            $User->users_tipo_usuario = 2;
            $User->users_estatus = 1;
            $User->users_aliado_id = 0;

            $User->save();
            $IdUser = $User->id;
            Auth::loginUsingId($IdUser);
         
            return redirect('/');
        }
    }


    public function Perfil()
    {
        $CategoriasTodas=ConfCategoria::where('conf_cat_estatus',1)->get();
        $suscripcion = Suscripcion::where('suscripcion_users_id',Auth::id())
        ->where('suscripcion_categorias',"!=","")->first();
        return view('Perfil',['CategoriasTodas'=>$CategoriasTodas,'Suscripcion'=>$suscripcion]);
    }

    public function ActualizarPerfil(Request $request){

        $user = User::find(Auth::id());

        $reglas = array(
            'users_nombre' => 'required',
            'users_apellido' => 'required',
            'email' => 'required|unique:users,email,'.Auth::id()
        );
        $mensajes = array(
            'users_nombre.required' => 'Nombre Requerido',
            'users_apellido.required' => 'Apellido Requerido',
            'email.required'  => 'Ingrese el Email',
            'email.unique'  => 'El Email ya se encuentra registrado'
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);

        if ($validator->fails()) {
            return redirect('Perfil')
                ->withErrors($validator)
                ->withInput();
        }
        $user->users_nombre = $request->users_nombre;
        $user->users_apellido = $request->users_apellido;
        $user->users_direccion = $request->users_direccion;
        $user->users_telefono = $request->users_telefono;
        $user->email = $request->email;
        $user->save();

         return redirect('Perfil')->with('mensaje', 'Perfil Actualizado')
            ->with('tipo', 'success');
    }

    public function CuentaCancelar(Request $request){
        $User = User::where('id',Auth::id())->first(); 
        $User->users_estatus = "0";
        $User->save();
        Auth::logout();
        return redirect('Inicio');
    }


    public function Suscripciones(Request $request){

        $Suscripcion = Suscripcion::where('suscripcion_users_id',Auth::id())->first();
        $suscripcion_categorias = $request->input('suscripcion_categorias');
        @$suscripcion_categorias = implode(',', $suscripcion_categorias);

        if (count($Suscripcion)==0){
            $Suscripcion = new Suscripcion;
            $Suscripcion->suscripcion_categorias = $suscripcion_categorias;
            $Suscripcion->suscripcion_users_id = Auth::id();
            $Suscripcion->save();
        }
        else{
            $Suscripcion->suscripcion_categorias = $suscripcion_categorias;
            $Suscripcion->save();
        }

        return redirect('Perfil')->with('mensaje2', 'Suscripciones Actualizadas')
            ->with('tipo2', 'success');
    }

    public function SuscripcionesCancelar(Request $request){
        $Suscripcion = Suscripcion::where('suscripcion_users_id',Auth::id())->first(); 
        $Suscripcion->suscripcion_categorias = "";
        $Suscripcion->save();

        return redirect('Perfil')->with('mensaje3', 'Suscripciones Canceladas')
            ->with('tipo3', 'danger');
    }

    public function Contrasena()
    {
        return view('Contrasena');
    }

    public function ActualizarContrasena(Request $request)
    {
        $user = User::find(Auth::id());

        $reglas = array(
            'password_actual' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6'
        );
        $mensajes = array(
            'password_actual.required' => 'Ingrese la contraseña actual',
            'password.required' => 'Ingrese la nueva contraseña',
            'password.confirmed' => 'La contraseña y su confirmación son diferentes',
            'password_confirmation.required'  => 'Ingrese la confirmación de la nueva contraseña',
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);

        if ($validator->fails()) {
            return redirect('Contrasena')
                ->withErrors($validator)
                ->withInput();
        }

        $current_password = Auth::user()->password;           
        if(!Hash::check($request->password_actual, $current_password)){
            return redirect('Contrasena')->with('mensaje', 'Contraseña Actual Incorrecta')
            ->with('tipo', 'danger');
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('Contrasena')->with('mensaje', 'Contraseña Actualizada')
        ->with('tipo', 'success');
    }

    public function Inicio()
    {
        $CategoriasTodas=ConfCategoria::where('conf_cat_estatus',1)->get();
        $Marcas=Marca::where('marca_estatus',1)->get();
        $OfertaSlider=ProductoPrecio::inRandomOrder()
        ->where('productop_slider',1)
        ->where('productop_estatus',1)
        ->where('productop_fecha_inicio', '<=',fecha_guion())
        ->where('productop_fecha_fin', '>=', fecha_guion())
        ->orWhere('productop_fecha_inicio','')
        ->orWhere('productop_fecha_fin','')
        ->limit(30)->get();

        $ProductosSlider=ProductoPrecio::inRandomOrder()
        ->where('productop_slider',1)
        ->where('productop_estatus',1)
        ->orWhere('productop_fecha_inicio','')
        ->orWhere('productop_fecha_fin','')
        ->limit(30)->get();
        
        $OfertaLimitadas=ProductoPrecio::inRandomOrder()
        ->where('productop_estatus',1)
        ->where('productop_fecha_inicio', '<=',fecha_guion())
        ->where('productop_fecha_fin', '>=', fecha_guion())
        ->get();

        $Ofertas=Producto::orderBy('created_at','DESC')
        ->where('producto_estatus',1)->paginate(30);

        return view('Inicio',['CategoriasTodas'=>$CategoriasTodas,'Marcas'=>$Marcas,
        'OfertaSlider'=>$OfertaSlider,'ProductosSlider'=>$ProductosSlider,'Ofertas'=>$Ofertas,
        'OfertaLimitadas'=>$OfertaLimitadas]);
    }


    public function QuienesSomos()
    {
        return view('QuienesSomos');
    }  

    public function CondicionesGenerales()
    {
        return view('CondicionesGenerales');
    }   

    public function ProteccionDeDatos()
    {
        return view('ProteccionDeDatos');
    } 
    
    public function Categorias()
    {
        $CategoriasTodas=ConfCategoria::where('conf_cat_estatus',1)->get();
        return view('Categorias',['CategoriasTodas'=>$CategoriasTodas]);
    }

    public function Categoria($categoria)
    {
        $categoria=explode('-',$categoria);
        $categoria=end($categoria);

        $DatosCategoria=ConfCategoria::find($categoria);
        $Productos=Producto::inRandomOrder()->where('producto_categoria',$categoria)->where('producto_estatus',1)->limit(30)->get();

        return view('Categoria',['DatosCategoria'=>$DatosCategoria,'Productos'=>$Productos]);
    }

    public function Marcas()
    {
        $MarcasTodas=Marca::where('marca_estatus',1)->get();
        return view('Marcas',['MarcasTodas'=>$MarcasTodas]);
    }

    public function Marca($marca)
    {
        $marca=explode('-',$marca);
        $marca=end($marca);

        $DatosMarca=Marca::find($marca);
        $Productos=Producto::inRandomOrder()->where('producto_marca',$marca)->where('producto_estatus',1)->limit(30)->get();

        return view('Marca',['DatosMarca'=>$DatosMarca,'Productos'=>$Productos]);
    }

    public function SubCategoria($subcategoria)
    {
        $subcategoria=explode('-',$subcategoria);
        $subcategoria=end($subcategoria);

        $DatosSubcategoria=ConfSubcategoria::find($subcategoria);
        $Productos=Producto::inRandomOrder()->where('producto_subcategoria',$subcategoria)->where('producto_estatus',1)->limit(30)->get();

        return view('Subcategoria',['DatosSubcategoria'=>$DatosSubcategoria, 'Productos'=>$Productos]);
    }

    public function Oferta()
    {
        $CategoriasTodas=ConfCategoria::all();
        $Ofertas=Producto::orderBy('created_at','DESC')->where('producto_estatus',1)->paginate(30);
        return view('Oferta',['CategoriasTodas'=>$CategoriasTodas,
        'Ofertas'=>$Ofertas]);
    }


    public function Aliados()
    {
        return view('Aliados');
    }
    public function GuardarAliados(Request $request)
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
            return redirect('Aliados')->withErrors($validator)->withInput();
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
                $mail->to('aliados@cuponcity.com.co', 'Correo de Aliados')->subject('Se ha registrado un aliado');
            });
         
            return redirect('Aliados')->with('mensaje', 'Información Guardada, pronto nos comunicaremos contigo')->with('tipo', 'success');

                        
        }
    }

    public function Ayuda()
    {
        $AyudaCategoria=AyudaCategoria::where('ayudas_cat_estatus',1)->get();
        return view('Ayuda',['Ayuda'=>$AyudaCategoria]);
    }

    public function AyudaDetalle(Request $request)
    {
        if (Auth::id()){$auth = Auth::id();}else{$auth=0;}
        /* GUARDAR REGISTRO */
        $YaRegistroAyuda = AyudaDetalle::where('ayudas_id',$request->id)
        ->where('ayudas_users_id',$auth)->where('ayudas_ip',ObtenerIP())->first();
        if ($YaRegistroAyuda == null){
            $AyudaDetalle = new AyudaDetalle;
            $AyudaDetalle->ayudas_id = $request->id;
            $AyudaDetalle->ayudas_detalles_util = $request->opcion;
            $AyudaDetalle->ayudas_users_id = $auth;
            $AyudaDetalle->ayudas_ip = ObtenerIP();
            $AyudaDetalle->save();
        }
        
    }

    public function Contacto()
    {
        return view('Contacto');
    }

    public function PonteEnContacto($GetCat,$GetMot)
    {
        $Categoria=AyudaCategoria::all();
        $Categoria = $Categoria->pluck('ayudas_cat_nombre', 'id');
        $Motivo=array();
        return view('PonteEnContacto',['Categoria'=>$Categoria,'Motivo'=>$Motivo,
            'GetCat'=>$GetCat,'GetMot'=>$GetMot]);
    }

    public function Busqueda(Request $request)
    {
        if ($request->palabra!="")
        {
            $buscado=Producto::inRandomOrder()
            ->where('producto_titulo', 'like', '%'.$request->palabra.'%')
            ->where('producto_estatus',1)
            ->orwhereRaw('FIND_IN_SET("'.$request->palabra.'",producto_palabras_clave)')
            ->limit(15)->get();
        }
        else
        {
            $buscado=array();
        }
        return view('Busqueda',['Buscado'=>$buscado,'Palabra'=>$request->palabra]);
    }

    public function Producto($id,Request $request){
        $id=explode('-',$id);
        $request->id = $id[1];
        $id=Crypt::decrypt($request->id);
        $Producto = Producto::find($id);

        return view('Producto',['Producto'=>$Producto]);
    }


    public function CityPuntos()
    {
        $Balance = 0;
        $BalanceMasT = 0;
        $BalanceMenosT = 0;
        
        $BalanceMas =Credito::groupBy('credito_users_id')
        ->selectRaw('sum(credito_saldo) as saldo, credito_users_id')
        ->where('credito_users_id',Auth::id())
        ->where('credito_tipo','1')->first();
        if ($BalanceMas!=null){$BalanceMasT=$BalanceMas->saldo;}

        $BalanceMenos =Credito::groupBy('credito_users_id')
        ->selectRaw('sum(credito_saldo) as saldo, credito_users_id')
        ->where('credito_users_id',Auth::id())
        ->where('credito_tipo','2')->first();
        if ($BalanceMenos!=null){$BalanceMenosT=$BalanceMas->saldo;}

        $Balance = $BalanceMasT-$BalanceMenosT;

        $Creditos = Credito::where('credito_users_id',Auth::id())->orderBy('created_at','DESC')->get();
        return view('CityPuntos',['Creditos'=>$Creditos,'Balance'=>$Balance]);
    }
    
}
