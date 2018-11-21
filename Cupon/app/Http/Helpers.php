<?php 
use App\User;

use \Carbon\Carbon;
     
	/**
     * Funcion Dar Formato a Fecha de d/m/y a y-m-d y viceversa.
     *
     * @param  string  $date
     * @return date
     */
     function FormatDate_DMY_YMD($fecha){
     	$fecha = Carbon::createFromFormat('d/m/Y', $fecha)->format('Y-m-d');
     	return $fecha;
     }

     function FormatDate_YMD_DMY($fecha){
     	$fecha = Carbon::createFromFormat('Y-m-d', $fecha)->format('d/m/Y');
     	return $fecha;
     }

     function FormatDate_YMD_DMY_Completa($fecha){
        $fecha = Carbon::createFromFormat('Y-m-d H:i:s', $fecha)->format('d/m/Y g:i A');
        return $fecha;
     }

     function FormatDate_YMD_DMY_Completa2($fecha){
        $fecha = Carbon::createFromFormat('Y-m-d H:i:s', $fecha)->format('Y-m-d H:i:s');
        return $fecha;
     }
     /**
     * Funcion Dar Formato a las Horas de 24 a 12 y viceversa.
     *
     * @param  string  $hora
     * @return hour
     */

     function FormatHour_24($hora)
     {
     return date("H:i:s", strtotime($hora));
     }

     function FormatHour_12($hora)
     {
     return date("g:i A", strtotime($hora));
     }

     /**
     * Funcion Quitar Caracteres especiales y mas en texto.
     *
     * @param  string  $string
     * @return string
     */

     function sanear_texto($string)
     {
     $string = trim($string);
      
     $string = str_replace(
     array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
     array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
     $string
     );
      
     $string = str_replace(
     array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
     array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
     $string
     );
      
     $string = str_replace(
     array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
     array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
     $string
     );
      
     $string = str_replace(
     array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
     array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
     $string
     );
      
     $string = str_replace(
     array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
     array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
     $string
     );
      
     $string = str_replace(
     array('ñ', 'Ñ', 'ç', 'Ç'),
     array('n', 'N', 'c', 'C'),
     $string
     );

    $string = str_replace(
     array(" "),
     '', $string);

    $string = str_replace(
     array("-"),
     '', $string);
      
     $string = str_replace(
     array("º", "~","`",
      "#", "@", "|", "!",
      "·", "$", "%", "&", "/",
      "(", ")", "?", "'", "¡",
      "¿", "[", "^", "<code>", "]",
      "+", "}", "{", "¨", "´", "®",
      ">", "< ", ";", ",", ":",
      "."),
     '',
     $string
     );
      
     return strtolower($string);
     } 

     /**
     * Funcion Chequear Permisos
     *
     * @param  string  $string
     * @return string
     */

  /* Da el formato correcto a monto con decimales */
     
     function formato_cantidad($monto)
     {
       $monto = number_format($monto, 2, ',', '.');
       return $monto;
     }

     function formato_porcentaje($monto)
     {
       $monto = number_format($monto, 0, '.', '');
       return $monto;
     }

     function formato_cantidad_normal($monto)
     {
       $monto = number_format($monto, 2, '.', '');
       return $monto;
     }


   function chequearPermisos($permissions){
    $userAccess = ObtenerPermisos(auth()->user()->users_tipo_usuario);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }


     /**
     * Funcion Obtener Permisos
     *
     * @param  string  $string
     * @return string
     */

  function ObtenerPermisos($id)
  {
    switch ($id) {
      case 1:
        return 'SuperAdmin';
        break;
      case 2:
        return 'Admin';
        break;
      case 3:
        return 'Básico';
        break;
      default:
        return 'Básico';
        break;
    }
  }

    function fecha()
    {
    $fecha=date('Y-m-d H:i:s');
    return $fecha;
    }

    function fecha_guion()
    {
    $fecha_guion=date('Y-m-d');
    return $fecha_guion;
    }

    function fecha_barra()
    {
    $fecha_barra=date('d/m/Y');
    return $fecha_barra;
    }

    function dia()
    {
    $dia = date('d');
    return $dia;
    }

    function mes()
    {
    $mes = date('m');
    return $mes;
    }

    function anio()
    {
    $anio = date('Y');
    return $anio;
    }

    function cortarTexto($texto, $numMaxCaract){
      if (strlen($texto) <  $numMaxCaract){
        $textoCortado = $texto;
      }else{
        $textoCortado = substr($texto, 0, $numMaxCaract);
        $ultimoEspacio = strripos($textoCortado, " ");
     
        if ($ultimoEspacio !== false){
          $textoCortadoTmp = substr($textoCortado, 0, $ultimoEspacio);
          if (substr($textoCortado, $ultimoEspacio)){
            $textoCortadoTmp .= '...';
          }
          $textoCortado = $textoCortadoTmp;
        }elseif (substr($texto, $numMaxCaract)){
          $textoCortado .= '...';
        }
      }
     
      return $textoCortado;
    }

    /* CODIGO COMPRA */

    function GenerarCodCompra() {
        $number = mt_rand(1, mt_getrandmax());

        if (ExisteCodigoCompra($number)) {
            return GenerarCodCompra();
        }
        return $number;
    }
    function ExisteCodigoCompra($number) {
        return \App\Compra::where('compra_codigo_compra',$number)->exists();
    }

    /* CODIGO ENTERO */

    function GenerarCodCompraEntero() {
        $number = mt_rand(1, mt_getrandmax());

        if (ExisteCodigoCompraEntero($number)) {
            return GenerarCodCompraEntero();
        }
        return $number;
    }
    function ExisteCodigoCompraEntero($number) {
        return \App\Compra::where('compra_codigo_entero',$number)->exists();
    }

    /* CODIGO CUPON */

    function GenerarCodCompraHex() {
        $number = str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);

        if (ExisteCodigoCompraHex($number)) {
            return GenerarCodCompraHex();
        }
        return $number;
    }
    function ExisteCodigoCompraHex($number) {
        return \App\Compra::where('compra_codigo_hex',$number)->exists();
    }

    function ObtenerIP() {
      if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip =  $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      else
      {
        $ip = $_SERVER['REMOTE_ADDR'];
      }
      if ($ip == '::1')
      {
        $ip='127.0.0.1';
      }
      return $ip;
    }

            