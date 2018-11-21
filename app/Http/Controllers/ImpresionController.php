<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Compra;

use Auth;

class ImpresionController extends Controller
{

    public function CuponPDF($compra_codigo_hex,$compra_codigo_entero) 
    {
        $compra_codigo_hex=Crypt::decrypt($compra_codigo_hex);
        $compra_codigo_entero=Crypt::decrypt($compra_codigo_entero);

        $Cupon = $this->Cupon($compra_codigo_hex,$compra_codigo_entero);

        if ($Cupon->compra_users_id == \Auth::id()){
            $view =  \View::make('Impresion.CuponPDF', 
            compact('Cupon'))->render();
            $pdf = \App::make('dompdf.wrapper');

            $pdf->setOptions(['isRemoteEnabled' => true]);
            $contxt = stream_context_create([ 
                'ssl' => [ 
                    'verify_peer' => FALSE, 
                    'verify_peer_name' => FALSE,
                    'allow_self_signed'=> TRUE
                ] 
            ]);
            $pdf->getDomPDF()->setHttpContext($contxt);

            $pdf->loadHTML($view);
            $pdf->setPaper('Letter', 'portrait');
            return $pdf->stream('Cupon de '.config('app.name').'.pdf');
        }
        else
        {
            return redirect('TusCupones')->with('mensaje', 'El Cupón que deseas ver no te pertence')
            ->with('tipo', 'danger');
        }

        
    }

    public function Cupon($compra_codigo_hex,$compra_codigo_entero) 
    {
        $DatosCupon = Compra::where('compra_codigo_hex',$compra_codigo_hex)
        ->where('compra_codigo_entero',$compra_codigo_entero)->first();
        return $DatosCupon;
    }
}
