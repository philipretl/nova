@for ($i=1; $i<=$Cupon->compra_cantidad;$i++)
<div style="page-break-inside:avoid;">
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Cupon de {{config('app.name')}}</title>
    {!! Html::style('css/style_impresion.css') !!}
  </head>
  <body>
    <header>
      <table border="0" cellspacing="0" cellpadding="0" style=" font-size: 9px; ">
        <thead>
          <tr>
            <th style="width:20%;text-align: center;">
              {{fecha_barra()}}
            </th>
            <th style="width:80%;text-align: center;">
              {{$Cupon->DatosProductoPrecio->DatosProducto->producto_titulo}}
            </th>
          </tr>
        </thead>
      </table>
    </header>

    <footer>
      <table border="0" cellspacing="0" cellpadding="0" style=" font-size: 7px; ">
        <thead>
          <tr>
            <th class="bold" style="width:100%;text-align: left;">
              <?php 
              $compra_codigo_hex=Crypt::encrypt($Cupon->compra_codigo_hex);
              $compra_codigo_entero=Crypt::encrypt($Cupon->compra_codigo_entero);
              ?>
              <a href="{{URL('/CuponPDF/'.$compra_codigo_hex.'/'.$compra_codigo_entero)}}" target="_blank" data-toggle="tooltip" title="Imprimir Cupón">
                {{URL('/CuponPDF/'.$compra_codigo_hex.'/'.$compra_codigo_entero)}}
              </a>

            </th>
          </tr>
        </thead>
      </table>
    </footer>

    <main class="page">
      <table border="0" cellspacing="0" cellpadding="0" style=" font-size: 16px; ">
        <thead>
          <tr>
            <th style="width:40%;padding-left:10px;"><img class="logo" src="{{URL('assets_page/logo_little.png')}}" alt="{{$Cupon->DatosProductoPrecio->DatosProducto->producto_titulo}}"></th>
            <th class="bold" style="width:60%;"> &nbsp;
            </th>
          </tr>
        </thead>
      </table>
      <table border="0" cellspacing="0" cellpadding="0" style=" font-size: 12px;">
        <thead>
          <tr>
            <?php @$url=\App\Producto::ImagenUno($Cupon->DatosProductoPrecio->DatosProducto->id); ?>

            <th style="width:30%;"><img class="cupon" src="{{URL('public/img/productos/'.$url)}}" alt="{{$Cupon->DatosProductoPrecio->DatosProducto->producto_titulo}}"></th>
            <th style="width:70%;text-align: left;">
            <h3 class="text-yellow">{{$Cupon->DatosProductoPrecio->DatosProducto->producto_titulo}}</h3>
              <h5 class="text-yellow">{{$Cupon->DatosProductoPrecio->productop_titulo}}</h5>
            <br><br>
            <?php 
              $fechaRedencion = (new \Carbon\Carbon($Cupon->created_at))->addDay(3);
              $fechaRedencion = FormatDate_YMD_DMY_Completa($fechaRedencion);
            ?>
            Válido Hasta: {{$fechaRedencion}}<br>
            SKU: {{$Cupon->compra_codigo_entero}}-{{strtoupper(hash('crc32',$i))}}<br><br>
            </th>
          </tr>
        </thead>
      </table>

    <table class="tabla" cellspacing="0" cellpadding="0" style="background-color: transparent;border-top: dashed 2px #cecece;margin:10px;">
        <thead>
        <tr>
          <th class="bold" style="width:100%;text-align: center;font-size:15px;">
            <?php echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG($Cupon->compra_codigo_entero, "EAN13",3,33,array(1,1,1)) . '" alt="barcode" class="barcode"   />'; ?>
            <br>
            <br>
            {{$Cupon->compra_codigo_entero}}-{{strtoupper(hash('crc32',$i))}}
          </th>
        </tr>
        </thead>
    </table>
    <table class="tabla" cellspacing="0" cellpadding="0" style="background-color: transparent;border-bottom: dashed 2px #cecece;">
        <thead>
        <tr>
          <th style="width:100%;text-align: center;font-size:8px; padding-bottom: 15px; ">
            COD.INT.: {{$Cupon->compra_codigo_entero}} <br>
            Fecha de Compra: {{FormatDate_YMD_DMY_Completa($Cupon->created_at)}} <br>
          </th>
        </tr>
        </thead>
    </table>

    <table class="tabla" cellspacing="0" cellpadding="0" style="background-color: transparent;">
        <thead>
        <tr>
          <th style="width:100%;text-align: justify;font-size:10px; padding: 15px 30px 15px 30px; ">
            <label class="bold" style="color:#2d7dff;padding-left:-20px;font-size:12px;display:block;">REGLAS CLARAS</label>
            {!! $Cupon->DatosProductoPrecio->DatosProducto->DatosCategoria->conf_cat_condiciones !!}
            <br>

<label class="bold"  style="color:#2d7dff;padding-left:-20px;font-size:12px;">DATOS BANCARIOS</label><br>
• BANCOLOMBIA S.A.<br>
• JULIO CESAR MAYA BASTIDAS<br>
• 98385333<br>
• Cuenta de Ahorro No. 261-859059-25<br><br>

<span class="bold">Cra. 6 A 23N 29 Ciudad Jardín Popayán - 8337031</span><br><br>

<span style="color:#2d7dff;padding-left:-20px;font-size:12px;" class="bold" ><i>Puedes Despositar en Efectivo en Nuestras Oficinas</i></span><br><br>

          </th>
        </tr>
        </thead>
    </table>


    </main>
</div>
  </body>
</html>
</div>
@endfor