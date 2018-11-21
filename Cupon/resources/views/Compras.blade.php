@extends('Body')
@section('titulo', 'Tus Compras '.config('app.name'))

@section('css')
<style type="text/css">
    .cart-detail h4, h3.cart-price{
        margin-top: 0px;
    }
    .EliminarItem{
        cursor: pointer;
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
                                <h3><span>Tus Compras {{config('app.name')}}</span></h3>
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
                    <h1 class="ProcesandoCupones hide text-center"><i class="fa fa-hourglass fa-spin"></i> Procesando Cupones</h1>
                    <h1 class="CuponesProcesados hide text-center"><i class="fa fa-hourglass"></i> Cupones Procesados</h1>
                    @if (count($Compra)==0)
                    <h1 class="text-center"><i class="fa fa-trash"></i> Sin Item Cargados </h1>
                    @else
                    <div class="col-md-12 col-sm-12 col-xs-12 Item">
                        <div class="shopcart-box marT50 marB20">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4>Producto</h4>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <h4>Cantidad</h4>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <h4>Precio Unitario</h4>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <h4>Total</h4>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <h4 class="text-right">Acción</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $total = 0; ?>
                    @foreach ($Compra as $compras)
                    <?php 
                    $id_crypt = Crypt::encrypt($compras->id);
                    $id_crypt_producto = Crypt::encrypt($compras->DatosProductoPrecio->DatosProducto->id); ?>

                    @if ((strtotime($compras->compra_oferta_fecha_fin)>=strtotime(fecha_guion())) || ($compras->compra_oferta_fecha_fin==""))
                    <div class="cart-details marT10 marB10 Item Item{{$compras->id}}">
                        <div class="col-md-5 col-sm-5 col-xs-12">
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
            
                                            @if ($compras->compra_oferta == 1) 
                                                <span class="label label-danger label-sm">Oferta disponible hasta {{FormatDate_YMD_DMY($compras->compra_oferta_fecha_fin)}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input type="hidden" id="Cantidad{{$compras->id}}" value="{{formato_cantidad_normal($compras->compra_cantidad)}}">
                                <h3 class="cart-price">
                                    <select class="form-control CantidadProducto" data-id="{{$compras->id}}">
                                        <?php
                                        $CantidadReal=$compras->compra_cantidad+$compras->DatosProductoPrecio->productop_cantidad;
                                        ?>
                                        @for($i=1;$i<=$CantidadReal;$i++)
                                        <option @if ($i==$compras->compra_cantidad) selected @endif 
                                        value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input type="hidden" id="TotalProducto{{$compras->id}}" value="{{formato_cantidad_normal($compras->compra_total)}}">
                                <h4 class="cart-price">$ {{formato_cantidad_normal($compras->compra_total)}}</h4>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input type="hidden" id="TotalProducto{{$compras->id}}" value="{{formato_cantidad_normal($compras->compra_total)}}">
                                <h4 class="cart-price">$ {{formato_cantidad_normal($compras->compra_cantidad*$compras->compra_total)}}</h4>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                                <img src="{{URL('img/cart_out.png')}}" title="Eliminar del Carrito" data-toggle="tooltip" class="EliminarItem" data-crypt="{{$id_crypt}}" data-id="{{$compras->id}}">
                            </div>
                        </div>
                    </div>
                    @endif
                    <?php $total = $total + ($compras->compra_cantidad*$compras->compra_total); ?>
                    @endforeach
                    @if ($CreditoTotal>0)
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-left ItemCredito">
                        <div class="cart marT30">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h4 class="bold">Créditos Disponibles</h4>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <input type="hidden" id="CreditoTotal" value="{{formato_cantidad_normal($CreditoTotal)}}">
                                <h4 class="CreditoTotal"> $ {{formato_cantidad_normal($CreditoTotal)}}</h4>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-right">
                        <div class="cart marT30">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="bold">Total</h3>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <input type="hidden" id="TotalCompra" value="{{formato_cantidad_normal($total)}}">
                                <h4 class="TotalCompra">$ {{formato_cantidad_normal($total)}}</h4>
                            </div>
                        </div>
                    </div>
                    @if ($CreditoTotal>0)
                    <div class="col-md-6 col-sm-6 col-xs-6 text-right marT30 marB5 ItemProcesarCredito pull-left">
                        <a href="#" class="itg-btn cart-btn ProcesarCuponesCredito">Procesar Cupones con Crédito</a>
                    </div>
                    @endif
                    <div class="col-md-6 col-sm-6 col-xs-6 text-right marT30 marB5 ItemProcesar pull-right">
                        <a href="#" class="itg-btn cart-btn ProcesarCupones">Procesar Cupones</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- //***Shopcart-Section End***// -->

@stop

@section('script')
<script type="text/javascript">
    $(".ProcesarCupones").on('click',function(){

        swal({
        title: "Esta Seguro de Procesar Los Cupones que se encuentran en el Carrito?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Si',
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
      },
      function(isConfirm) {
          if (isConfirm) {
            var URL = "{!! (url('EmailProcesarCupones')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:{{\Auth::id()}},_token: $('meta[name=csrf-token]').attr('content')},
                beforeSend: function() {
                    $('.Item').addClass('hide');
                    $('.ItemTotal').addClass('hide');
                    $(".ProcesarCupones").addClass('hide');
                    $(".ProcesandoCupones").removeClass('hide');
                },
                success: function(data) {
                    $(".CuponesProcesados").removeClass('hide');
                    $(".ProcesandoCupones").addClass('hide');
                    $(".CantidadProductosUsuario").html(0);
                    swal({
                      type: 'success',
                      title: 'Cupones Procesados',
                      showConfirmButton: false,
                      timer: 1500
                    });

                    setTimeout("location.href='{!! (url('TusCupones')) !!}'",3000);
                }
            });
          } else {
            return true;
          }
      });
        
    });

    $(".ProcesarCuponesCredito").on('click',function(){

        swal({
        title: "Esta Seguro de Procesar Los Cupones que se encuentran en el Carrito con el Crédito Disponible?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Si',
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
      },
      function(isConfirm) {
          if (isConfirm) {
            var URL = "{!! (url('EmailProcesarCuponesCredito')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:{{\Auth::id()}},_token: $('meta[name=csrf-token]').attr('content')},
                beforeSend: function() {
                    $('.ItemCredito').addClass('hide');
                    $('.ItemProcesarCredito').addClass('hide');
                    $(".ProcesarCuponesCredito").addClass('hide');
                    $(".ProcesandoCupones").removeClass('hide');
                },
                success: function(data) {
                    $(".CuponesProcesados").removeClass('hide');
                    $(".ProcesandoCupones").addClass('hide');
                    $(".CantidadProductosUsuario").html(0);
                    swal({
                      type: 'success',
                      title: 'Cupones Procesados',
                      showConfirmButton: false,
                      timer: 1500
                    });

                    setTimeout("location.href='{!! (url('TusCupones')) !!}'",3000);
                }
            });
          } else {
            return true;
          }
      });
        
    });

    $(".EliminarItem").on('click',function(){
      var id = $(this).data("id");
      var id_crypt = $(this).data("crypt");

      swal({
        title: "Esta Seguro de Eliminar Este Item?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Si',
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
      },
      function(isConfirm) {
          if (isConfirm) {
            var URL = "{!! (url('EliminarCompra')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id_crypt,_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {
                    var TotalProducto = $("#TotalProducto"+id).val();
                    var TotalCompra = $("#TotalCompra").val();
                    var TotalCompra = parseFloat(TotalCompra)-parseFloat(TotalProducto);
                    $("#TotalCompra").val(TotalCompra.toFixed(2));
                    $(".TotalCompra").html(TotalCompra.toFixed(2));

                  var cantidad = $(".CantidadProductosUsuario").text();
                  var cantidad = parseFloat(cantidad)-1;
                  $(".CantidadProductosUsuario").html(cantidad);
                  $(".Item"+id).remove();
                }
            });
          } else {
            return true;
          }
      });
    });

    $(".CantidadProducto").on('change',function(){
      var id = $(this).data("id");
      var cantidad = $(this).val();

      var URL = "{!! (url('CantidadCompra')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id,cantidad:cantidad,_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {
                    location.reload();
                }
            });

    });
    
</script>
@stop