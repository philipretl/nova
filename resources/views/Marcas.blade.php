@extends('Body')
@section('titulo', 'Inicio')

@section("css")
<style type="text/css">
    .icon_categoria{
        max-width: 90px !important;
    }
</style>
@endsection

@section('content')

       <!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span class="parpadea">Marcas</span></h3>
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
                    @if(count($MarcasTodas)>0)
                    @foreach ($MarcasTodas as $marcat) 
                    <div class="col-md-3 col-sm-3 col-xs-12 marB30 text-center" style="height: 250px;">
                        <div class="categorie-box">
                            <figure>
                                <img src="{{URL('public/img/marcas/'.$marcat->marca_imagen)}}" alt="" class="imagen_Marca" style="opacity:0.8;height: 230px;width: 100%;">
                            </figure>
                        </div>
                        <h3 class="bold"><a href="{{URL('/Marca/'.sanear_texto($marcat->marca_nombre).'-'.$marcat->id.'')}}">{{$marcat->marca_nombre}}</a></h3>
                    </div>
                    @endforeach
                    @else
                    <h3>Sin Marcas Registradas</h3>
                    @endif
                </div>
            </div>
        </div>
        <!-- //***categories-section End***// -->
        
@stop