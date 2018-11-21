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
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <!-- Bootstrap -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets_page/img/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{ asset('assets_page/img/favicon.ico')}}" type="image/x-icon">
        <!-- Master Css -->
        <link href="{{ asset('assets_page/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('assets_page/css/color.css')}}" rel="stylesheet" id="colors">
        <link href="{{ asset('assets_page/css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('assets_page/css/style-app.css')}}" rel="stylesheet">

        <!--select2-->
        <link href="{{ asset('js/select2/css/select2.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('js/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- sweetalert -->
        <link href="{{ asset('js/sweetalert/css/sweetalert.css') }}" rel="stylesheet" type="text/css" />

        @yield('css')   
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class='preloader'>
            <div class='loader-center'>
                <div class='loader'>
                    <div class='circle circle-1'></div>
                    <div class='circle circle-2'></div>
                    <div class='circle circle-3'></div>
                    <div class='circle circle-4'></div>
                </div>
            </div>
        </div>

        <!-- //***Header-section Start***// -->
        <div class="main-header">
            <div class="middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <a class="navbar-brand" href="{{URL('/')}}">
                            <img class="site_logo" alt="Site Logo" src="{{ asset('assets_page/img/logo.png')}}" /></a>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="shopping-cart">
                                <li>
                                <a href="{{URL('/')}}" class="button_menu">Ir a {{config('app.name')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-menu" class="wa-main-menu main-menu menuFixed">
            </div>
        </div>
        <!-- //***Header-section End***// -->

        @yield('content')   
        
        <div class="clear"></div>
        <!-- //***Footer-Section Start***// -->
        <div class="main-footer padT60">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <div class="footer-logo">
                            <a href="{{URL('Contacto')}}"><img class="site_logo_footer_ayuda" src="{{asset('assets_page/img/footer-logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                    <?php $Empresa=App\Empresa::where('id',1)->first(); ?>
                    <p><i class="fa fa-envelope"></i> Si no encontraste tu solución en las preguntas y respuestas, por favor, <a href="{{URL('Contacto')}}" style="color: #FBC40B;" class="bold" title="Escribenos aqui">escríbenos aquí</a>.</p>
                    <p><i class="fa fa-phone"></i> <strong>Llámanos</strong>  al <strong>{{$Empresa->empresa_telefono_celular}}</strong></p>
                    <p class="rigths-reserved pull-right">© 2017 {{config('app.name')}}. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Footer-Section End***// -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//code.tidio.co/3mkq2i2c5vid88km4sorlmacwdiyvc8m.js"></script>
        <!-- URL CHAT EXTERNO = https://www.tidiochat.com/chat/3mkq2i2c5vid88km4sorlmacwdiyvc8m -->
        <script src="{{ asset('assets_page/js/jquery.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('assets_page/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/owl-carousel/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/megamenu/js/hover-dropdown-menu.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/megamenu/js/jquery.hover-dropdown-menu-addon.js')}}"></script>
        <script src="{{ asset('assets_page/plugins/preloader/js/anime.min.js')}}"></script>
        <script src="{{ asset('assets_page/js/main.js')}}"></script>

        <!--select2-->
        <script src="{{ asset('js/select2/js/select2.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/select2/js/select2_es.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/select2/js/select2-init.js')}}" type="text/javascript"></script>

        <!--sweetalert-->
        <script src="{{ asset('js/sweetalert/js/sweetalert.js')}}" type="text/javascript"></script>
    
        @yield('script')   
    </body>
</html>