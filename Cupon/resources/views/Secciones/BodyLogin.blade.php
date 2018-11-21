<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('titulo')</title>

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    
	<!-- icons -->
    <link href="{{ asset('js/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    
	<!--bootstrap -->
    <link href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />    
    <!-- Theme Styles -->
    <link href="{{ asset('css/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/formlayout.css') }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
        body{
            background: url(img/background.jpg) no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
        }
        .panel{
            background-color: rgba(255,255,255,0.8);
        }
    </style>
    
	<!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" /> 
    </head>
    
    <body class="page-header-fixed sidemenu-closed-hidelogo page-container-bg-solid page-content-white page-md">
    <!-- start page content -->
    <div class="page-wrapper">
        <!-- start page container -->
        <div class="page-container page-login">
            <div class="page-content-wrapper">
                @yield('content')
            </div>
        </div>
        <!-- end page content -->
    </div>

    <!-- start js include path -->
    <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.blockui.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('js/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>

    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script> 

    <script src="{{ asset('js/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-validation/js/localization/messages_es.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
    
    @yield("script")   
  </body>
</html>
