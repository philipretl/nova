@extends('Body')
@section('titulo', 'Inicio')

@section ('css')
<style type="text/css">
    .owl-carousel .owl-item figure {
        background-color: rgba(255,255,255,.65)
    }
    .owl-carousel .owl-item .ImgSlider {
        height: 450px;
        width: auto;
        margin: auto;
    }
</style>
@endsection

@section('content')

<!-- //***slider-section Start***// -->
<div class="slider-section bg padB20">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @if (count($OfertaSlider)>0 || count($ProductosSlider)>0)
                <div id="slider" class="owl-carousel owlCarousel">
                @foreach ($OfertaSlider as $productop_slider)
                    <div class="item">
                        <figure>
                            <?php $id_crypt = Crypt::encrypt($productop_slider->DatosProducto->id); 
                            @$url=\App\Producto::ImagenUno($productop_slider->DatosProducto->id); ?>
                            <a href="{{URL('Producto/'.sanear_texto($productop_slider->DatosProducto->producto_titulo).'-'.$id_crypt)}}"><img class="ImgSlider" src="{{URL('public/img/productos/'.$url)}}" alt="" ></a>
                            <figcaption>
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <h4>{{$productop_slider->DatosProducto->producto_titulo}} <sup>{{$productop_slider->productop_titulo}}</sup></h4>
                                <h4 class="box-price">
                                    <span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>{{$productop_slider->productop_total_descuento}}</span>
                                    <del><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{$productop_slider->productop_total}}
                                    </span></del>

                                </h4>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="slider-btn text-right">
                                    <a href="{{URL('Producto/'.sanear_texto($productop_slider->DatosProducto->producto_titulo).'-'.$id_crypt)}}" class="itg-btn box-btn white">+584262774626<span>Obtener {{config('app.name')}}</span></a>
                                </div>
                            </div>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                    @foreach ($ProductosSlider as $producto_slider)
                    <div class="item">
                        <figure>
                            <?php 
                            $id_crypt = Crypt::encrypt($producto_slider->DatosProducto->id); 
                            @$url=\App\Producto::ImagenUno($producto_slider->DatosProducto->id); ?>
                            <a href="{{URL('Producto/'.sanear_texto($producto_slider->DatosProducto->producto_titulo).'-'.$id_crypt)}}">
                            <img class="ImgSlider" src="{{URL('public/img/productos/'.$url)}}" alt="">
                            </a>
                            <figcaption>
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <h4>{{$producto_slider->DatosProducto->producto_titulo}} <sup>{{$producto_slider->productop_titulo}}</sup></h4>
                                <h4 class="box-price">
                                    <span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>{{$producto_slider->productop_total_descuento}}
                                    </span>
                                    <del>
                                    <span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{$producto_slider->productop_total}}</span>
                                    </del>
                            </h4>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="slider-btn text-right">
                                    <?php $id_crypt = Crypt::encrypt($producto_slider->DatosProducto->id); ?>
                                    <a href="{{URL('Producto/'.sanear_texto($producto_slider->DatosProducto->producto_titulo).'-'.$id_crypt)}}" class="itg-btn box-btn white">+584262774626<span>Obtener {{config('app.name')}}</span></a>
                                </div>
                            </div>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
                    @endif
            </div>
        </div>
    </div>
</div>
<!-- //***slider-section End***// -->
<div class="clear"></div>
<!-- //***latest-deals Start***// -->
<div class="latest-deals bg">
    <div class="container padB60">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 box1 marB30">
                <div class="section-box">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="boxbg">
                            <h3><a href="{{URL('/Oferta')}}"><i class="flaticon-label"></i></a> CityOfertas</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="symbol">
                            <h5 style="font-size:20px">Ver Todas<a href="{{URL('/Oferta')}}"><i class="flaticon-external-link-symbol"></i></a></h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                @if (count($Ofertas)>0)
                    @foreach ($Ofertas as $lista_ofertas)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box-a marB30">
                            <figure>
                                <?php @$url=\App\Producto::ImagenUno($lista_ofertas->id); ?>
                                <img src="{{URL('public/img/productos/'.$url)}}" alt="{{$lista_ofertas->producto_titulo}}" width="100%" style="height: 250px;">
                            </figure>
                            <div class="box-detail">

                                <?php $id_crypt = Crypt::encrypt($lista_ofertas->id); ?>
                                <h4 class="hover marB5" style="height: 50px;"><a href="{{URL('Producto/'.sanear_texto($lista_ofertas->producto_titulo).'-'.$id_crypt)}}">{!!cortarTexto($lista_ofertas->producto_titulo,35)!!}</a></h4>
                                <!--<p>{!!cortarTexto($lista_ofertas->producto_descripcion,75)!!}</p>-->
                                <h4 class="box-price">
                                    <span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>{{$lista_ofertas->PrecioUno($lista_ofertas->id)->productop_total_descuento}}</span>
                                    <del>
                                        <span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{$lista_ofertas->PrecioUno($lista_ofertas->id)->productop_total}}
                                        </span>
                                    </del> 
                                    
                                </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12 text-center">
                        {{$Ofertas->links()}}
                    </div>
                @else
                <div class="row">
                    <h3 class="marT20 text-center">Sin Ofertas Registradas</h3>
                </div>
                @endif
                    <!--<div class="col-md-12 col-sm-12 col-xs-12 hidden-xs">
                        <div class="pagination-box text-center">
                            <a href="#"><span><i class="fa fa-arrow-left" aria-hidden="true"></i></span></a>
                            <a href="#"><span>1</span></a>
                            <a href="#"><span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>-->
                </div>
            </div>
            
            <div class="col-md-3 col-sm-4 col-xs-12 animated bounceIn">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="latest-tweet marT20">
                            <h4 class="orange capital marB10">Categorias</h4>
                            <ul class="nav navbar-nav vertical-menu">
                                @foreach ($CategoriasTodas as $categoriat)
                                <li><a href="{{URL('/Categoria/'.sanear_texto($categoriat->conf_cat_nombre).'-'.$categoriat->id.'')}}">
                                    <img src="{{URL('public/img/categorias/'.$categoriat->conf_cat_imagen)}}" class="icon_categoria-low" alt="{{$categoriat->conf_cat_nombre}}"> &nbsp;
                                    {{$categoriat->conf_cat_nombre}}
                                    @if (count($categoriat->SubCategorias))
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    @endif
                                </a>
                                @if (count($categoriat->SubCategorias))
                                <ul class="dropdown-menu">
                                    @foreach ($categoriat->SubCategorias as $subcategoriat)
                                    <li><a href="{{URL('/SubCategoria/'.sanear_texto($subcategoriat->conf_subcat_nombre).'-'.$subcategoriat->id.'')}}">{{$subcategoriat->conf_subcat_nombre}}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- //***latest-deals End***// -->
<!-- //***Offers-section Start***// -->
<div class="slider-second slidernav padB60">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 marB30 marT40">
            <div class="section-box text-left">
                <h3><i class="flaticon-stars-couple-of-different-sizes"></i> CityOfertas Limitadas</h3>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
                @if (count($OfertaLimitadas)>0)
        <div id="slidersecond" class="owl-carousel owlCarousel">
            @foreach ($OfertaLimitadas as $ofertas_limitadas)
            <div class="item">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="box-a">
                        <figure>
                            <?php @$url=\App\Producto::ImagenUno($ofertas_limitadas->DatosProducto->id); ?>
                            <img src="{{URL('public/img/productos/'.$url)}}" alt="">
                        </figure>
                        <div class="box-detail box-details">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <?php $id_crypt = Crypt::encrypt($ofertas_limitadas->DatosProducto->id); ?>
                                    <h4 class="hover marB20"><a href="{{URL('Producto/'.sanear_texto($ofertas_limitadas->DatosProducto->producto_titulo).'-'.$id_crypt)}}">{{$ofertas_limitadas->DatosProducto->producto_titulo}}</a></h4>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 marT20 marB10 text-right">
                                <div class="row">
                                    <a href="{{URL('Producto/'.sanear_texto($ofertas_limitadas->DatosProducto->producto_titulo).'-'.$id_crypt)}}" class="itg-btn box-btn black">+584262774626<span>Obtener {{config('app.name')}}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
                @else
                <div class="row">
                    <h3 class="marT20 text-center">Sin Ofertas Seleccionadas</h3>
                </div>
                @endif
    </div>
</div>
</div>
<!-- //***Offers-section End***// -->
@stop