@extends('Body')
@section('titulo', 'Ofertas')
@section('content')

       <!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span class="parpadea">Ofertas</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->

        <!-- //***Deals-Grid Start***// -->
        <div class="deals bg padTB60">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                        @if(count($Ofertas)>0)
                            @foreach ($Ofertas as $lista_ofertas)
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="box-a marB30">
                                    <figure>
                                    <?php @$url=\App\Producto::ImagenUno($lista_ofertas->id); ?>
                                        <img src="{{URL('public/img/productos/'.$url)}}" width="100%"  style="height: 250px;">
                                    </figure>
                                    <div class="box-detail">
                                         <?php $id_crypt = Crypt::encrypt($lista_ofertas->id); ?>
                                        <h4 class="hover marB5" style="height: 50px;"><a href="{{URL('Producto/'.sanear_texto($lista_ofertas->producto_titulo).'-'.$id_crypt)}}">{!!cortarTexto($lista_ofertas->producto_titulo,35)!!}</a></h4>
                                        <h4> 
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
                    <h3>Sin Ofertas Registradas</h3>
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

                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-tweet marT20">
                                    <h4 class="orange capital marB10">Categorias</h4>

                                    <ul class="nav navbar-nav vertical-menu">
                                        
                                        @foreach ($CategoriasTodas as $categoriat) 
                                        <li><a href="{{URL('/Categoria/'.sanear_texto($categoriat->conf_cat_nombre).'-'.$categoriat->id.'')}}">
                                            <img src="{{URL('public/img/categorias/'.$categoriat->conf_cat_imagen)}}" class="icon_categoria-low"> &nbsp;
                                            {{$categoriat->conf_cat_nombre}}
                                            @if (count($categoriat->SubCategorias))
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            @endif
                                        </a>

                                            @if (count($categoriat->SubCategorias))
                                            <ul class="dropdown-menu dropdown-subcategorias">
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
        <!-- //***Deals-Grid End***// -->
        
@stop