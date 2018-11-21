@extends('Body')
@section('titulo', $DatosSubcategoria->DatosCategoria->conf_cat_nombre.' - '.$DatosSubcategoria->conf_subcat_nombre)
@section('content')

       <!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span style="font-size:30px;" class="parpadea">
                                 <?php ($DatosSubcategoria->conf_subcat_imagen=="") ? $img_subcat='public/img/categorias/'.$DatosSubcategoria->DatosCategoria->conf_cat_imagen:$img_subcat='public/img/subcategorias/'.$DatosSubcategoria->conf_subcat_imagen; ?>   
                                <img src="{{URL(''.$img_subcat.'')}}" class="icon_subcategoria"> &nbsp; {{$DatosSubcategoria->DatosCategoria->conf_cat_nombre.' / '.$DatosSubcategoria->conf_subcat_nombre}}</span></h3>
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
            <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-tweet marT20">
                                    <h4 class="orange capital marB10">Otras SubCategorias</h4>

                                    <ul class="nav navbar-nav vertical-menu">
                                        @foreach ($DatosSubcategoria->DatosCategoria->SubCategorias as $otrasubcategoria) 
                                        @if ($DatosSubcategoria->id!=$otrasubcategoria->id)
                                        <?php ($otrasubcategoria->conf_subcat_imagen=="") ? $img_subcat='public/img/categorias/'.$otrasubcategoria->DatosCategoria->conf_cat_imagen:$img_subcat='public/img/subcategorias/'.$otrasubcategoria->conf_subcat_imagen; ?>   
                                        
                                        <li><a href="{{URL('/SubCategoria/'.sanear_texto($otrasubcategoria->conf_subcat_nombre).'-'.$otrasubcategoria->id.'')}}">
                                            <img src="{{URL(''.$img_subcat.'')}}" class="icon_subcategoria"> &nbsp;
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

            <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            @foreach ($Productos as $lista_productos)
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="box-a marB30">
                                    <figure>
                                        <?php @$url=\App\Producto::ImagenUno($lista_productos->id); ?>
                                        <img src="{{URL('public/img/productos/'.$url)}}" alt="" width="100%">
                                    </figure>
                                    <div class="box-detail">
                                        <?php $id_crypt = Crypt::encrypt($lista_productos->id); ?>
                                        <h4 class="hover marB5"><a href="{{URL('Producto/'.sanear_texto($lista_productos->producto_titulo).'-'.$id_crypt)}}">{{$lista_productos->producto_titulo}}</a></h4>
                                        <p>{!!cortarTexto($lista_productos->producto_descripcion,100)!!}</p>
                                        <h4>  
                                            <span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>{{$lista_productos->PrecioUno($lista_productos->id)->productop_total_descuento}}</span>
                                            <del>
                                            <span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{$lista_productos->PrecioUno($lista_productos->id)->productop_total}}</span>
                                            </del>
                                            </h4>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                         </div>
            </div>
        </div>
    </div>
</div>
@stop