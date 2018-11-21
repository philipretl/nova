@extends('Body')
@section('titulo', 'Inicio')
@section('content')

       <!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span class="parpadea">Categorias</span></h3>
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
                    @foreach ($CategoriasTodas as $categoriat) 
                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">
                        <div class="categorie-box">
                            <figure>
                                <img src="assets_page/img/all/image{{rand(1,8)}}.jpg" alt="" class="imagen_categoria">
                                <figcaption>
                                    <a href="{{URL('/Categoria/'.sanear_texto($categoriat->conf_cat_nombre).'-'.$categoriat->id.'')}}">
                                        <img src="{{URL('public/img/categorias/'.$categoriat->conf_cat_imagen)}}" class="icon_categoria">
                                    </a>
                                    <h3><a href="{{URL('/Categoria/'.sanear_texto($categoriat->conf_cat_nombre).'-'.$categoriat->id.'')}}">{{$categoriat->conf_cat_nombre}}</a></h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- //***categories-section End***// -->
        
@stop