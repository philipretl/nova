@extends('Body')
@section('titulo', 'Categoria - '.$DatosCategoria->conf_cat_nombre)
@section('content')

       <!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3 style="font-size:35px;" class="parpadea"><span>{{$DatosCategoria->conf_cat_nombre}}</span></h3>
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
            <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            @foreach ($Productos as $lista_productos)
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="box-a marB30">
                                    <figure>
                                        <?php @$url=\App\Producto::ImagenUno($lista_productos->id); ?>
                                        <img src="{{URL('public/img/productos/'.$url)}}" alt="{{$lista_productos->producto_titulo}}"  width="100%"  style="height: 250px;">
                                    </figure>
                                    <div class="box-detail">
                                        <?php $id_crypt = Crypt::encrypt($lista_productos->id); ?>
                                        <h4 class="hover marB5" style="height: 50px;"><a href="{{URL('Producto/'.sanear_texto($lista_productos->producto_titulo).'-'.$id_crypt)}}">{!!cortarTexto($lista_productos->producto_titulo,35)!!}</a></h4>
                                        <h4> 
                                            <span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>{{$lista_productos->PrecioUno($lista_productos->id)->productop_total_descuento}}
                                                </span>
                                            <del>
                                            <span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{$lista_productos->PrecioUno($lista_productos->id)->productop_total}}
                                            </span> 
                                            </del>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                         </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-tweet marT20">
                                    <h4 class="orange capital marB10">SubCategorias</h4>

                                    <ul class="nav navbar-nav vertical-menu">
                                        @foreach ($DatosCategoria->SubCategorias as $otrasubcategoria) 
                                        @if ($DatosCategoria->id!=$otrasubcategoria->id)
                                        <li><a href="{{URL('/SubCategoria/'.sanear_texto($otrasubcategoria->conf_subcat_nombre).'-'.$otrasubcategoria->id.'')}}">
                                            <img src="{{URL('public/img/subcategorias/'.$otrasubcategoria->conf_subcat_imagen)}}" class="icon_subcategoria"> &nbsp;
                                            {{$otrasubcategoria->conf_subcat_nombre}}
                                        </a>
                                        </li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@stop