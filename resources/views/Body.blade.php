<?php
App\Visita::AnadirVisita();
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <title>{{config('app.name')}} - @yield('titulo')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />     
        <meta name="keywords" content="cupon,city,CuponCity,colombia,cupones" />
        <meta name="author" content="josuelmm92@gmail.com - Josue Moreno" />
        <meta name="viewport" content="width=device-width, initial-scale= maximum-scale=1">
        <meta http-equiv="Content-Language" content="es-pe" />
        <meta name="title" content="{{config('app.name')}}" />
        <meta name="description" content="{{config('app.name')}}" />
        <meta name="robots" content="index,follow" />
        <meta name="author" content="JosueLMM92@gmail.com" />
        <link rel="author" href="JosueLMM92@gmail.com"/>
        <link rel="publisher" href="JosueLMM92@gmail.com"/>
        <link href="http://www.cuponcity.com.co/" rel="canonical">
        <link rel="alternate" hreflang="es" href="http://www.cuponcity.com.co/" />
        <link rel="alternate" hreflang="en" href="http://www.cuponcity.com.co/" />
        <!-- Site Icons -->
        <link rel="shortcut icon" href="{{ asset('assets_page/img/favicon.ico')}}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset('assets_page/img/favicon.ico')}}">

        <!-- Bootstrap -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets_page/img/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{ asset('assets_page/img/favicon.ico')}}" type="image/x-icon">
        <!-- Master Css -->
        <link href="{{ asset('assets_page/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('assets_page/css/color.css')}}" rel="stylesheet" id="colors">
        <link href="{{ asset('assets_page/css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('assets_page/plugins/animated-wow/animate.css')}}" rel="stylesheet">
        <link href="{{ asset('js/sweetalert/css/sweetalert.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets_page/css/style-app.css')}}" rel="stylesheet">
        <style type="text/css">
            input[type="text"]{
                padding: 10px;
            }
            .MarcasCarousel{
              width: 170px;
              position: fixed;
              z-index:2001;
              top:220px;
            }

            .MarcasCarousel2{
              top:120px !important;
            }
            
            .ItemMarca{
                -webkit-transition: all 1s; /* Safari */
                transition: all 1s;
            }
            .ItemMarca:hover{
                -ms-transform: scale(1.2); /* IE 9 */
                -webkit-transform: scale(1.2); /* Safari */
                transform: scale(1.2);
                -webkit-transition: all 0.8s; /* Safari */
                transition: all 0.8s;
            }
            .ItemMarca img{
                max-width: 100px;
                margin:auto;
                height: 80px;
                margin-bottom:10px;
            }

            .Visitas {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                text-align: left;
                padding:10px;
                z-index: 3000;
            }

            .Visitas span{
                font-weight: bold;
                background: rgba(255,255,255,0.7);
                border-radius: 2px;
                padding:2px 10px;
            }
        </style>
        @yield('css')   
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="hide">{{config('app.name')}} Tu Ciudad de Ofertas Especiales de Cupones </h1>
        <!--<div class='preloader'>
            <div class='loader-center'>
                <div class='loader'>
                    <div class='circle circle-1'></div>
                    <div class='circle circle-2'></div>
                    <div class='circle circle-3'></div>
                    <div class='circle circle-4'></div>
                </div>
            </div>
        </div>-->

        <div id="Busqueda">
          <button type="button" class="close">×</button>
          <form class="Busqueda">
            <input type="search" id="PalabraBusqueda" value="" placeholder="Ingrese una palabra aquí" autocomplete="off" />
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i> Buscar</button>
          </form>
        </div>

        <div class="Visitas">
            <span>Visitas: <?php $Visita = App\Visita::count(); print $Visita; ?></span>
        </div>


        <!-- //***Carousel Marcas***// -->
        <?php
        $Marcas=App\Marca::where('marca_estatus','1')->get();
        ?>
        @if (count($Marcas)>0)
        <div class="MarcasCarousel hidden-xs hidden-sm hidden-md animated slideInLeft">
            <div id="myCarouselVertical" class="carousel slide text-center">
                <h4 class="bold">CityMarcas</h4>
                <!-- Carousel items -->
                <div class="carousel-inner vertical" style="padding: 10px;">
                        <?php $x = 0; ?>
                        @foreach ($Marcas as $lista_marcas)
                        <div class="@if ($x==0) active @endif item">

                        <a href="{{URL('/Marca/'.sanear_texto($lista_marcas->marca_nombre).'-'.$lista_marcas->id.'')}}">
                            <img src="{{URL('public/img/marcas/'.$lista_marcas->marca_imagen)}}" alt="{{$lista_marcas->marca_nombre}}" data-target="#carousel-main" class="img-responsive" data-slide-to="{{$x}}" >
                        </a>
                        </div>
                        <?php $x++; ?>
                        @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- //***Header-section Start***// -->
        <div class="main-header">
            <div class="middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-sm-offset-2 col-md-5 col-sm-5 col-xs-12">
                            <a class="navbar-brand" href="{{URL('/')}}">
                            <img class="site_logo" alt="Site Logo" src="{{ asset('assets_page/img/logo.png')}}" /></a>
                        </div>
                        <!--<div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="header-searchbar">
                            <form action="{{URL('Busqueda')}}" method="GET">
                                <input type="text" name="search" placeholder="Ingrese palabras aqui">
                                <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                            </div>
                        </div>-->
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <ul class="shopping-cart">
                                <?php $CantProductos = App\Compra::where('compra_users_id',Auth::id())->where('compra_estatus',1)->count(); ?>
                                <li class="marL20"><a href="{{URL('Compras')}}"><i class="flaticon-shopping-cart"></i><sup class="CantidadProductosUsuario">{{$CantProductos}}</sup></a></li>
                                <li class="marL20"><a href="{{URL('Ayuda')}}" class="button_menu">City Inquietudes</a></li>
                                <li>
                                <div class="dropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>

                                <a href="#" class="button_menu dropdown-toggle" data-toggle="dropdown">
                                      @if (!isset(\Auth::user()->id))
                                      Mi Cuenta
                                      @else
                                      <i class="fa fa-user"></i> &nbsp; {{\Auth::user()->users_nombre}}
                                      @endif
                                </a>
                                    <ul class="dropdown-menu dropdown_boton">
                                      @if (!isset(\Auth::user()->id))
                                      <li><a href="{{URL('login')}}">Iniciar Sesión</a></li>
                                      <li><a href="{{URL('CrearCityCuenta')}}">Crear City Cuenta</a></li>
                                      @else
                                      @if (\Auth::user()->users_tipo_usuario == 1)
                                      <li><a href="{{URL('Dashboard')}}">Dashboard</a></li>
                                      @endif
                                      <li><a href="{{URL('Perfil')}}">Perfil + Suscripcion</a></li>
                                      <li><a href="{{URL('Contrasena')}}">Cambiar Contraseña</a></li>
                                      <li><a href="{{URL('CityPuntos')}}">Mis CityPuntos</a></li>
                                      <li><a href="{{URL('TusCupones')}}">Mis {{config('app.name')}}</a></li>
                                      <li><a href="{{URL('logout')}}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
                                      @endif
                                    </ul>
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-menu" class="wa-main-menu main-menu">
                <!-- Menu -->
                <div class="wathemes-menu relative">
                    <!-- navbar -->
                    <div class="navbar navbar-default theme-bg mar0 menuFixed" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                                    <li class="marR20 hide LogoMenu" style="list-style:none;">         
                                        <img class="site_logo_menu" alt="Site Logo" src="{{ asset('assets_page/img/logo.png')}}" />
                                    </li>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="navbar-header">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        </button>
                                        <!-- Logo -->
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <div class="row">
                                            <!-- nav -->
                                            <ul class="nav navbar-nav">
                                                <li class="marB20 @if (Route::current()->getName() == '/' || Route::current()->getName() == 'Inicio') active @endif"><a href="{{URL('Inicio')}}">Inicio</a></li>

                                                <li class="marB20 @if (Route::current()->getName() == 'QuienesSomos') active @endif"><a href="{{URL('QuienesSomos')}}">Quienes Somos</a></li>

                                                <li class="marB20 @if (Route::current()->getName() == 'Categorias' || Route::current()->getName() == 'Categoria' || Route::current()->getName() == 'SubCategorias' || Route::current()->getName() == 'SubCategoria') active @endif"><a href="{{URL('Categorias')}}">Categorias</a></li>


                                                <li class="marB20 @if (Route::current()->getName() == 'Marcas' || Route::current()->getName() == 'Marca') active @endif"><a href="{{URL('Marcas')}}">Marcas</a></li>


                                                <li class="marB20 @if (Route::current()->getName() == 'Oferta' || Route::current()->getName() == 'Ofertas') active @endif"><a href="{{URL('Oferta')}}">Ofertas</a></li>
                                                
                                                <li class="contact-menu marL20 @if (Route::current()->getName() == 'Contacto') active @endif">
                                                    <a href="{{URL('Contacto')}}">Ponte en Contacto</a>
                                                </li>

                                                <li class="marB20"><a href="#Busqueda"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                            <!-- navbar-collapse -->
                                        </div>
                                    </div>
                                </div>
                                <!-- col-md-12 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- container -->
                    </div>
                    <!-- navbar -->
                </div>
                <!--  Menu -->
            </div>
        </div>
        <!-- //***Header-section End***// -->
        
        <div class="ContenidoCupon">
        @yield('content')

    <div class="partnernav bg padB60 hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 marB30 marT20">
                    <div class="partner-btn">
                        <div class="section-box">
                            <div class="boxbggg">
                                <h3 class="text-left"><i class="flaticon-hand-shake"></i> City Marcas</h3>
                            </div>
                        </div>
                    </div>
                </div>
                    @if (count($Marcas)>0)
                <div id="sliderfifth" class="owl-carousel owlCarousel">
                    @foreach ($Marcas as $lista_marcas)
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="box-c">
                                <figure>
                                    <img src="{{URL('public/img/marcas/'.$lista_marcas->marca_imagen)}}" alt="{{$lista_marcas->marca_nombre}}" style="height:150px;">
                                </figure>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    @endif
            </div>
        </div>
    </div>
        </div>
        <div class="BusquedaCupon hide"></div>
        
        <div class="clear"></div>
        <!-- //***Footer-Section Start***// -->
        <div class="main-footer padT60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="footer-logo">
                            <a href="{{URL('QuienesSomos')}}"><img class="site_logo_footer" src="{{asset('assets_page/img/logo.png')}}" alt=""></a>
                            <p>Una empresa innovadora, creada con la motivación de que veas, sientas y disfrutes tu ciudad de una forma que no conocías... 
                            </p>
                        <div class="newsletter">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="row">
                                    <ul>
                                        <li><a href="https://twitter.com/Cuponcity_Col"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.facebook.com/Cuponcity-Colombia-1560872440666776/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/Cuponcity_Col/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <h4>Información</h4>
                        <p><a href="{{URL('QuienesSomos')}}">Quienes Somos</a></p>
                        <p><a href="{{URL('Aliados')}}">Trabaja Con Nosotros</a></p>
                        <p><a href="{{URL('CondicionesGenerales')}}">Condiciones Generales</a></p>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <h4>Categorias</h4>
                        <?php $Categorias=App\ConfCategoria::inRandomOrder()->where('conf_cat_estatus',1)->limit(7)->get(); ?>
                        @foreach ($Categorias as $categoria) 
                        <p><a href="{{URL('/Categoria/'.sanear_texto($categoria->conf_cat_nombre).'-'.$categoria->id.'')}}">{{$categoria->conf_cat_nombre}}</a></p>
                        @endforeach
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <h4>Mi Cuenta</h4>
                        @if (!isset(\Auth::user()->id))
                        <p><a href="{{URL('login')}}">Iniciar Sesión</a></p>
                        <p><a href="{{URL('CrearCityCuenta')}}">Crear City Cuenta</a></p>
                        @else
                        <!--<p><a href="{{URL('CityCuenta')}}">CityCuenta</a></p>-->
                        <p><a href="{{URL('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar Sesión</a></p>
                        @endif
                        <p><a href="{{URL('Compras')}}">Ver Compras</a></p>
                        <p><a href="{{URL('Ayuda')}}">City Inquietudes</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Footer-Section End***// -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//code.tidio.co/3mkq2i2c5vid88km4sorlmacwdiyvc8m.js"></script>
        <script src="{{ asset('assets_page/js/jquery.min.js')}}"></script>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyDnJzryw5UTYs4q-8UN4FyTwWIHlxMSYXw'></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('assets_page/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/owl-carousel/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/megamenu/js/hover-dropdown-menu.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/megamenu/js/jquery.hover-dropdown-menu-addon.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/preloader/js/anime.min.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/animated-wow/wow.min.js')}}"></script>
        <script src="{{ asset('js/sweetalert/js/sweetalert.js')}}" type="text/javascript"></script>

        <script src="{{ asset('assets_page/js/main.js')}}"></script>

        <script type="text/javascript">
            $('[data-toggle="tooltip"]').tooltip(); 
            
            $(function() {
              $('a[href="#Busqueda"]').on("click", function(event) {
                event.preventDefault();
                $("#Busqueda").addClass("open");
                $('#Busqueda > form > input[type="search"]').focus();
              });

              $("#Busqueda button.close").on("click", function(event) {
                if (
                  event.target == this ||
                  event.target.className == "close" ||
                  event.keyCode == 27
                ) {
                  $("#Busqueda").removeClass("open");
                }
              });

              $("form.Busqueda").submit(function(event) {
                event.preventDefault();
                var palabra = $("#PalabraBusqueda").val(); 
                var URL = "{!! (url('Busqueda')) !!}";
                $.ajax({
                    url: URL,
                    type: 'POST',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {palabra:palabra, _token: $('meta[name=csrf-token]').attr('content') },
                    beforeSend: function() {
                        $(".preloader").removeClass('loaderout');
                    },
                    error: function() {
                        $(".preloader").removeClass('loaderout');
                    }
                })
                .done(function(data) {
                  $("#Busqueda").removeClass("open");
                  $(".ContenidoCupon").addClass('animated bounceOut');
                  $(".ContenidoCupon").addClass('hide');

                  $(".BusquedaCupon").removeClass('hide');
                  $(".BusquedaCupon").addClass('animated bounceIn');
                  $(".BusquedaCupon").html(data);

                  setTimeout("$('.preloader').addClass('loaderout')",1000);

                });

              });
            });

            function CancelarBusqueda(){
                  $(".ContenidoCupon").removeClass('hide');
                  $(".ContenidoCupon").removeClass('animated bounceOut');
                  $(".ContenidoCupon").addClass('animated bounceIn');

                  $(".BusquedaCupon").addClass('hide');
                  $(".BusquedaCupon").removeClass('animated bounceIn');
                  $(".BusquedaCupon").html("");
            }

            equalheight = function(container){

    var currentTallest = 0,
         currentRowStart = 0,
         rowDivs = new Array(),
         $el,
         topPosition = 0;
     $(container).each(function() {

       $el = $(this);
       $($el).height('auto')
       topPostion = $el.position().top;

       if (currentRowStart != topPostion) {
         for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
           rowDivs[currentDiv].height(currentTallest);
         }
         rowDivs.length = 0; // empty the array
         currentRowStart = topPostion;
         currentTallest = $el.height();
         rowDivs.push($el);
       } else {
         rowDivs.push($el);
         currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
      }
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
     });
    }

$('#myCarouselVertical').carousel({
  interval: 5000
});

$('.carousel .vertical .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

var animated = ['rotateIn', 'rubberBand', 'lightSpeedIn', 'zoomInDown', 'fadeIn', 'wobble', 'swing', 'tada'];

function animationMarcas(item){
    $(".ItemMarca").removeClass(item);
}

function animation(){
    var rand = animated[Math.floor(Math.random() * animated.length)];
    $(".ItemMarca").addClass(rand);
}

var animaciones = function(){
    animated.forEach(animationMarcas);
    animation();
};

//setInterval(animaciones, 7000);

        </script>
       @yield('script')   
    </body>
</html>