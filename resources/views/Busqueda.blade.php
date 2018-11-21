<style type="text/css">
    .cart-detail h4, h3.cart-price{
        margin-top: 0px;
    }
</style>

        <!-- //***breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span>Busqueda</span> <button onclick="CancelarBusqueda()" class="btn btn-danger btn-sm">Cancelar</button></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***breadcrumb-section End***// -->
        <!-- //***Shopcart-Section Start***// -->
        <div class="busqueda-section bg padTB60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 marT20">
                        @if ($Palabra!="")
                            @if (count($Buscado)==0)
                                <h3 class="text-center"><i class="fa fa-search"></i> No se encuentra lo que buscas</h3>
                            @else
                                @foreach ($Buscado as $producto)
                                <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                                        <div class="deals">
                                            <div class="col-md-3 col-sm-4 col-xs-12 box-r BoxDetalle">
                                                <div class="row">
                                                    <figure>
                                                        <?php @$url=\App\Producto::ImagenUno($producto->id); ?>
                                                        <img src="{{URL('public/img/productos/'.$url)}}" alt="{{$producto->producto_titulo}}" height="200px">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-8 col-xs-12 box-l">
                                                <div class="box-detail boxs res-width BoxDetalle">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 sm-b">
                                                        <div class="row">
                                                            <?php $id_crypt = Crypt::encrypt($producto->id); ?>
                                                            <h4 class="hover"><a href="{{URL('Producto/'.sanear_texto($producto->producto_titulo).'-'.$id_crypt)}}">{{$producto->producto_titulo}}</a></h4>
                                                            <p>
                                                            <?php
                                                            $tagf="";
                                                            $tags = $producto->producto_palabras_clave;
                                                                if ($producto->producto_palabras_clave != ""){
                                                                    foreach(explode(',', $tags) as $tag){
                                                                        $tagf.= '<label class="label label-info label-sm" style="margin-bottom:10px;">'.$tag.'</label> &nbsp; ';
                                                                    }
                                                                }
                                                                else{
                                                                    $tagf = "";
                                                                }
                                                            ?>
                                                            {!! $tagf !!} <br><br>
                                                            </p>
                                                            <p>
                                                                <span class="hidden-sm"> {!!cortarTexto($producto->producto_descripcion,75)!!}</span>
                                                            </p>
                                                            <h4 class="marT20">
                                                                <span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>{{$producto->PrecioUno($producto->id)->productop_total_descuento}}
                                                                </span>
                                                                
                                                                <del>
                                                                <span class="red">
                                                                    <i class="fa fa-usd" aria-hidden="true"></i>{{$producto->PrecioUno($producto->id)->productop_total}}
                                                                </span>
                                                                </del>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 marB10 text-right">
                                                        <div class="row">
                                                            <a href="{{URL('Producto/'.sanear_texto($producto->producto_titulo).'-'.$id_crypt)}}" class="itg-btn box-btn black">+584262774626<span>Obtener {{config('app.name')}}</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    @endforeach
                            @endif
                        @else
                            <h3 class="text-center"><i class="fa fa-search"></i> Ingrese una palabra en el buscador</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>