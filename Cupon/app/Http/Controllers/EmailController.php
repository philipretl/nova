<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\User;
use App\Compra;
use App\Ayuda;
use App\AyudaCategoria;

use Auth;
use Mail;

class EmailController extends Controller
{
    /**
     * Email Procesar Cupones
     *
     * @return vista
     */
    public function ProcesarCupones(Request $request)
    {

        $user = User::findOrFail($request->id);
        $ListaCompra = Compra::where('compra_estatus', 1)->where('compra_users_id', $request->id)->get();

        Mail::send('Email.BodyEmail', ['user' => $user, 'ListaCompra' => $ListaCompra, 'tipo'=>'ProcesarCupones'], 
        function ($mail) use ($user) {
        	$mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        	$mail->to($user->email, $user->users_nombre)->subject('Has Procesado tus Cupones');
            $mail->to('administracion@cuponcity.com.co', 'Administrador CuponCity')->subject('Has Procesado tus Cupones');
        });
        Compra::ProcesarCupones($request->id);
    }

    /**
     * Email Procesar Cupones con Credito
     *
     * @return vista
     */
    public function ProcesarCuponesCredito(Request $request)
    {

        $user = User::findOrFail($request->id);
        $ListaCompra = Compra::where('compra_estatus', 1)->where('compra_users_id', $request->id)->get();

        /*Mail::send('Email.BodyEmail', ['user' => $user, 'ListaCompra' => $ListaCompra, 'tipo'=>'ProcesarCupones'], 
        function ($mail) use ($user) {
            $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->to($user->email, $user->users_nombre)->subject('Has Procesado tus Cupones');
            $mail->to('administracion@cuponcity.com.co', 'Administrador CuponCity')->subject('Has Procesado tus Cupones');
        });*/
        Compra::ProcesarCuponesCredito($request->id);
    }


    /**
     * Email Contactenos Ayuda
     *
     * @return vista
     */
    public function ContactenosAyuda(Request $request)
    {
    	$Tipo=AyudaCategoria::where('id',$request->tipo)->first();
    	$Motivo=Ayuda::where('id',$request->motivo)->first();
        Mail::send('Email.BodyEmail', ['Datos' => $request,'Tipo' => $Tipo,
        	'Motivo' => $Motivo,'tipo'=>'ContactenosAyuda'], 
        function ($mail) {
        	$mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        	$mail->to(env('MAIL_TO_ADDRESS'), env('MAIL_TO_NAME').' - Ayuda')->subject('Han enviando un mensaje desde "Contáctenos por Ayuda" ');
        });

        return redirect('ContactenosAyuda')->with('mensaje', 'Mensaje Enviado. Pronto Nos estaremos Comunicando con usted.')
            ->with('tipo', 'success');
    }

    /**
     * Email Contactenos
     *
     * @return vista
     */
    public function Contactenos(Request $request)
    {
        Mail::send('Email.BodyEmail', ['Datos' => $request,'tipo'=>'Contactenos'], 
        function ($mail) {
        	$mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        	$mail->to(env('MAIL_TO_ADDRESS'), env('MAIL_TO_NAME').' - Contáctenos')->subject('Han enviando un mensaje desde "Contáctenos" ');
        });
        
        return redirect('Contactenos')->with('mensaje', 'Mensaje Enviado. Pronto Nos estaremos Comunicando con usted.')
            ->with('tipo', 'success');
    }

     /**
     * Email Contactenos
     *
     * @return vista
     */
    public function ProcesarCompra(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $DatosCompra=Compra::find($id);

        $email = $DatosCompra->DatosUsuario->email;
        $emailDueno = $DatosCompra->DatosProductoPrecio->DatosProducto->producto_email;
        $emailAdmin = 'administracion@cuponcity.com.co';

        Mail::send('Email.BodyEmail', ['Datos' => $DatosCompra,'tipo'=>'ProcesarCompra'], 
        function ($mail) use ($email) {
            //$mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->to($email)->subject('Compra Exitosa de un Cupón desde CuponCity');
        });
        Mail::send('Email.BodyEmail', ['Datos' => $DatosCompra,'tipo'=>'ProcesarCompra'], 
        function ($mail) use ($emailDueno) {
            //$mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->to($emailDueno)->subject('Han Comprado uno de tus Cupones ');
        });

        Mail::send('Email.BodyEmail', ['Datos' => $DatosCompra,'tipo'=>'ProcesarCompra'], 
        function ($mail) use ($emailAdmin) {
            //$mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->to($emailAdmin, 'Administrador CuponCity')->subject('Han Comprado un nuevo Cupon');
        });
    }
}
