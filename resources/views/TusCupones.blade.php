@extends('Body')
@section('titulo', 'Tus Cupones '.config('app.name'))

@section('css')
<style type="text/css">
    .cart-detail h4, h3.cart-price{
        margin-top: 0px;
    }
</style>
@stop


@section('content')

        <!-- //***breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span class="parpadea">Tus Cupones {{config('app.name')}}</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***breadcrumb-section End***// -->
        
        <!-- //***Shopcart-Section Start***// -->
        <div class="shopcart-section bg padTB60">
            <div class="container">
                <div class="row">
                    
                    @if (session('mensaje'))
                    <div class="alert alert-{{ session('tipo') }} alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('mensaje') }}
                    </div>
                    @endif

                    @if (count($Compra)==0)
                    <h1>Sin Item Comprados </h1>
                    @else
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="shopcart-box">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4>Producto</h4>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <h4>Total</h4>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <h4 class="text-right">Acción</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $total = 0; ?>
                    @foreach ($Compra as $compras)
                    <?php 
                      $fechaFinal = (new \Carbon\Carbon($compras->created_at))->addDay(3);
                      $fechaRedencion = FormatDate_YMD_DMY_Completa($fechaFinal);
                      $fechaHoy = fecha();
                      $fechaLimite = FormatDate_YMD_DMY_Completa2($fechaFinal);

                      if ($fechaLimite<$fechaHoy){
                        App\Compra::ProcesarCuponesSinConcretar($compras->id);
                      }
                    ?>

                    <?php 
                    $id_crypt = Crypt::encrypt($compras->id);
                    $id_crypt_producto = Crypt::encrypt($compras->DatosProductoPrecio->DatosProducto->id); ?>

                    @if ((strtotime($compras->compra_oferta_fecha_fin)>=strtotime(fecha_guion())) || ($compras->compra_oferta_fecha_fin==""))
                    <div class="cart-details marT10 marB10 Item{{$compras->id}}">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="cart-detail marB30">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <figure>
                                            <?php @$url=\App\Producto::ImagenUno($compras->DatosProductoPrecio->DatosProducto->id); ?>
                                            <img src="{{URL('public/img/productos/'.$url)}}" alt="{{$compras->DatosProductoPrecio->DatosProducto->producto_titulo}}">
                                        </figure>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="row">
                                            <h4 class="capital"><a href="{{URL('Producto/'.sanear_texto($compras->DatosProductoPrecio->DatosProducto->producto_titulo).'-'.$id_crypt_producto)}}">{{$compras->DatosProductoPrecio->DatosProducto->producto_titulo}} 
                                                <sub><br>{{$compras->DatosProductoPrecio->productop_titulo}}</sub></a></h4>
                                            <br>
            <strong>Fecha de Compra:</strong> {{FormatDate_YMD_DMY_Completa($compras->created_at)}}<br>            
            <span style="color:red;"><strong>Fecha Máxima de Redención:</strong> {{$fechaRedencion}}</span>
                                            @if ($compras->compra_oferta == 1) 
                                                <span class="label label-danger label-sm">Oferta disponible hasta {{FormatDate_YMD_DMY($compras->compra_oferta_fecha_fin)}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="hidden" id="TotalProducto{{$compras->id}}" value="{{formato_cantidad_normal($compras->compra_total)}}">
                                <h3 class="cart-price">$ {{formato_cantidad_normal($compras->compra_total)}} </h3>
                            </div>
                            <?php 
                            $compra_codigo_hex=Crypt::encrypt($compras->compra_codigo_hex);
                            $compra_codigo_entero=Crypt::encrypt($compras->compra_codigo_entero);
                             ?>
                            
                            @if ($compras->compra_estatus == 2)
                                <span class="label label-danger label-sm">Debes Cancelar Tu Cupon</span>
                            @endif
                            @if ($compras->compra_estatus == 3)
                            <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                                <a href="{{URL('/CuponPDF/'.$compra_codigo_hex.'/'.$compra_codigo_entero)}}" target="_blank" data-toggle="tooltip" title="Imprimir Cupón">
                                    <i class="fa fa-file-pdf-o fa-2x"></i>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- //***Shopcart-Section End***// -->

@stop

@section('script')
<script type="text/javascript">

    
</script>
@stop