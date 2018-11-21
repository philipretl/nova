@extends('Body')
@section('titulo', 'Marca - '.$DatosMarca->marca_nombre)
@section('content')

       <!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3 style="font-size:35px;" class="parpadea"><span>{{$DatosMarca->marca_nombre}}</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->

        <!-- //***Categories-Section start***// -->
<div class="categories-section bg padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                        @if (count($Productos)>0)
                            @foreach ($Productos as $lista_productos)
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="box-a marB30">
                                    <figure>
                                        <?php @$url=\App\Producto::ImagenUno($lista_productos->id); ?>
                                        <img src="{{URL('public/img/productos/'.$url)}}" alt="{{$lista_productos->producto_titulo}}" width="100%"  style="height: 250px;">
                                    </figure>
                                    <div class="box-detail">
                                        <?php $id_crypt = Crypt::encrypt($lista_productos->id); ?>
                                        <h4 class="hover marB5" style="height: 50px;"><a href="{{URL('Producto/'.sanear_texto($lista_productos->producto_titulo).'-'.$id_crypt)}}">{!!cortarTexto($lista_productos->producto_titulo,35)!!}</a></h4>
                                        
                                        <h4>
                                            <span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>{{$lista_productos->PrecioUno($lista_productos->id)->productop_total_descuento}}</span>
                                            <del>
                                            <span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{$lista_productos->PrecioUno($lista_productos->id)->productop_total}}
                                            </span>  
                                            </del>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                    @else
                        <div class="col-md-12 col-sm-12 col-xs-12 marB30 text-center">
                            <figure>
                                <img src="assets_page/img/all/image{{rand(1,8)}}.jpg" alt="" class="imagen_Marca">
                                <figcaption>
                                    <a href="{{URL('/Marca/'.sanear_texto($DatosMarca->marca_nombre).'-'.$DatosMarca->id.'')}}">
                                        <img src="{{URL('public/img/marcas/'.$DatosMarca->marca_imagen)}}" style="height: 150px;">
                                    </a>
                                    <h2 class="bold"><a href="{{URL('/Marca/'.sanear_texto($DatosMarca->marca_nombre).'-'.$DatosMarca->id.'')}}">{{$DatosMarca->marca_nombre}}</a></h2>
                                    <h3><strong>Dirección:</strong> {{$DatosMarca->marca_direccion}}</h3>
                                    <h3><strong>Teléfono:</strong> {{$DatosMarca->marca_telefono}}</h3>
                                    <h3>{{$DatosMarca->marca_youtube}}</h3>
                                    <h3>{{$DatosMarca->marca_url}}</h3>

                                </figcaption>
                            </figure>
                    </div>
                    @endif
                         </div>
            </div>
        </div>
    </div>
</div>
@stop