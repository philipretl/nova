<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Visita;

class Visita extends Model
{
    protected $table = 'visitas';
    
    protected $fillable = ['visitas_ip','visitas_fecha'];

    public static function AnadirVisita(){
    	$ip=ObtenerIP();
    	$fecha=fecha_guion();
    	$Visita = Visita::where('visitas_ip', $ip)->where('visitas_fecha', $fecha)->first();
    	if ($Visita == null){
    		$Visita = new Visita;
            $Visita->visitas_ip = $ip;
            $Visita->visitas_fecha = $fecha;
            $Visita->save();
    	}
        return Visita::count();
    }
}
