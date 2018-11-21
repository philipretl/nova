@extends('Body')
@section('titulo', 'Detalles del Producto - '.$Producto->producto_titulo)

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
                                <h3><span>{{$Producto->producto_titulo}}</span></h3>
                                <ul class="breadcrumb-list">
                                    <li><a href="{{URL('/Categoria/'.sanear_texto($Producto->DatosCategoria->conf_cat_nombre).'-'.$Producto->DatosCategoria->id.'')}}">{{$Producto->DatosCategoria->conf_cat_nombre}}</a></li>
                                    <li><a href="{{URL('/SubCategoria/'.sanear_texto($Producto->DatosSubCategoria->conf_subcat_nombre).'-'.$Producto->DatosSubCategoria->id.'')}}">{{$Producto->DatosSubCategoria->conf_subcat_nombre}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***breadcrumb-section End***// -->

        <!-- //***Shopcart-Section Start***// -->
        <!-- //***Deals-Single Start***// -->
        <div class="deals bg padTB60">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="blog marB30">
                                    <div id="blog" class="owl-carousel owlCarousel">
                                        @foreach (@$Producto->Imagenes as $Imagen)
                                        <div class="item">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <figure>
                                                        <img src="{{(@$Producto) ? URL('public/img/productos/'.$Imagen->productoi_url) : ''}}" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <h4 class="bold">Descripción</h4>
                                <p>{!! $Producto->producto_descripcion !!}</p>
                                <h4 class="marT30 bold">Letra Menuda</h4>
                                <p>{!! $Producto->producto_letra_chica !!}</p>
                                <p><a href="{{URL('CondicionesGenerales')}}"><strong>Ver las Condiciones Generales</strong></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-7 col-xs-12">
                    <form id="CompraForm" method="POST" onsubmit="return false;">
                        <div class="awesome-spot">
                            <h3 class="capital marB10">{{$Producto->producto_titulo}}</h3>
                            <p>
                            <?php
                            $tagf="";
                            $tags = $Producto->producto_palabras_clave;
                            if ($Producto->producto_palabras_clave != ""){
                                foreach(explode(',', $tags) as $tag){
                                    $tagf.= '<label class="label label-info label-sm" style="margin-bottom:10px;">'.$tag.'</label> &nbsp; ';
                                }
                            }
                            else{
                                $tagf = "";
                            }
                            ?>
                            {!! $tagf !!}
                            </p>

                            <div class="col-md-12 col-sm-12 padL0">
                             <div class="row">

                                <div class="RadioComprar">                                    
                                  <ul>
                                <?php 
                                $Existencia = 0;
                                $comprados = 0;
                                $tcomprados = 0;
                                $unidades = 0;
                                $tunidades = 0;
                                ?>

                                @foreach ($Producto->Precios as $precios)
                                <?php $comprados = App\Compra::CantProductosComprados($precios->id); ?>
                                @if ($precios->productop_estatus == 1 && $precios->productop_cantidad>0)
                                <?php $Existencia++; ?>
                                  @if ((strtotime($precios->productop_fecha_inicio)<=strtotime(fecha_guion()) && (strtotime($precios->productop_fecha_fin)>=strtotime(fecha_guion()))) || ($precios->productop_fecha_inicio=="" && $precios->productop_fecha_fin==""))

                                  <?php 
                                  $unidades = $precios->productop_cantidad; 
                                  ?>
                                  <li class="LiPrecio-{{$precios->id}}">
                                    <input type="radio" id="precio-{{$precios->id}}" name="precio" value="{{$precios->id}}">
                                    <label for="precio-{{$precios->id}}">{{$precios->productop_titulo}} 
                                            @if ($precios->productop_oferta == 1) 
                                            {{$precios->DatosProducto->producto_titulo}} 
                                                <span class="label label-danger label-sm">Oferta finaliza el {{FormatDate_YMD_DMY($precios->productop_fecha_fin)}}</span>
                                            @endif</label>
                                    <div class="check"></div>
                                    <br>
                                    <span style="display: block;" class="text-left bold">{{$precios->productop_cantidad}} unidades</span>
                                    <span style="display: block;" class="text-right bold"> $ {{formato_cantidad_normal($precios->productop_total_descuento)}}</span>
                                  </li>
                                    @endif
                                    @endif
                                    <?php 
                                        $tunidades = $tunidades+$unidades;
                                        $tcomprados = $tcomprados+$comprados;
                                    ?>
                                    @endforeach
                                </ul>
                                </div>
                             </div>
                            </div>
                            @if ($Existencia>0)
                                @if (!isset(\Auth::user()->id))
                                <div class="col-md-12 col-sm-12 col-xs-12 marT10 marB10">
                                    <div class="row">
                                        <a href="{{URL('login')}}" class="btn btn-success btn-lg btn-block AnadirCarrito text-white" disabled><i class="fa fa-2x fa-shopping-bag"></i> &nbsp; Añadir al Carrito</a>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-12 col-sm-12 col-xs-12 marT10 marB10">
                                    <div class="row">
                                        <a href="javascript:void(0)" onclick="AnadirCarrito()" class="btn btn-success btn-lg btn-block AnadirCarrito text-white" disabled><i class="fa fa-2x fa-shopping-bag"></i> &nbsp; Añadir al Carrito</a>
                                    </div>
                                </div>
                                @endif
                            @endif

                            @if ($Existencia>0)

                            <div class="col-md-12 col-sm-12 padL0 text-center">
                             <div class="row">
                                <div class="col-xs-6 marT20 marB20">
                                    <i class="fa fa-hourglass fa-2x marB10"></i><br>
                                    Se agota el tiempo
                                </div>
                                <div class="col-xs-6 marT20 marB20">
                                    <i class="fa fa-percent fa-2x marB10"></i><br>
                                    <span style="font-size:17px;" class="bold">Hasta un {{$Producto->PorcentajeAlto($Producto->id)}} % OFF</span>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-xs-6 marT20 marB20">
                                    <i class="fa fa-cart-arrow-down fa-2x marB10"></i><br>
                                   {{$tunidades}} unidades disponibles
                                </div>
                                <div class="col-xs-6 marT20 marB20">
                                    <i class="fa fa-shopping-cart fa-2x marB10"></i><br>
                                   {{$tcomprados}} unidades compradas

                                </div>
                             </div>
                             
                            </div>
                            @else
                            <div class="col-md-12 col-sm-12 padL0 text-center">
                             <div class="row">
                                <div class="col-xs-12 marT20 marB20">
                                    <i class="fa fa-cart-arrow-down fa-2x marB10"></i><br>
                                    Sin Unidades Disponibles
                                </div>
                             </div>
                            </div>
                            @endif
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Deals-Single End***// -->
        <!-- //***Producto-Section End***// -->

@stop

@section ('script')
<script type="text/javascript">
    function AnadirCarrito(){
         var precio = $('input[name=precio]:checked', '#CompraForm').val();
         var URL = "{!! (url('GuardarCompras')) !!}";
                $.ajax({
                    url: URL,
                    type: 'POST',
                    dataType: 'json',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {compra_productop_id :precio, _token: $('meta[name=csrf-token]').attr('content') }
                })
                .done(function(data) {
                    if (data.error == 4 || data.existencia == 0){
                        $(".LiPrecio-"+precio).remove();
                    }
                    swal({
                      type: data.tipo,
                      title: data.mensaje,
                      showConfirmButton: false,
                      timer: 1500
                    });
                    $(".CantidadProductosUsuario").html(data.cantidad);
                });


    }

    $('#CompraForm input').on('change', function() {
        var id_precio = $('input[name=precio]:checked', '#CompraForm').val(); 
        if (id_precio >0)
        {
            $(".AnadirCarrito").removeAttr('disabled');
        }
    });

</script>
@stop