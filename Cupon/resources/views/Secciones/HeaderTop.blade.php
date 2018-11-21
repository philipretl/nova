<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="JosueLMM92@gmail.com" />
    <meta name="author" content="JosueLMM92@gmail.com" />
    <title>@yield('titulo')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />     

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    
	<!-- icons -->
    <link href="{{ asset('js/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    
	<!--bootstrap -->
    <link href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('js/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('js/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" media="screen">
    
    <!-- Theme Styles -->
    <link href="{{ asset('css/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/formlayout.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone -->
    <link href="{{ asset('js/dropzone/dropzone.css') }}" rel="stylesheet" media="screen">
    <!-- toast -->
    <link href="{{ asset('js/toast/jquery.toast.min.css') }}" rel="stylesheet" media="screen">
     <!--select2-->
    <link href="{{ asset('js/select2/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!--tagsinput-->
    <link href="{{ asset('js/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <!-- full calendar -->
    <link href="{{ asset('js/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
    <!-- datatables -->
    <link href="{{ asset('js/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- sweetalert -->
    <link href="{{ asset('js/sweetalert/css/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <!-- summernote -->
    <link href="{{ asset('js/summernote/summernote.css') }}" rel="stylesheet" type="text/css" />

    @yield("css")   
    
	<!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" /> 
    </head>
    
    <body class="page-header-fixed sidemenu-closed-hidelogo page-container-bg-solid page-content-white page-md">
    <div class="page-wrapper">
        @include('Secciones.Header')

        <!-- start page container -->
        <div class="page-container">
 			@include ('Secciones.Sidebar')
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="col-md-12">
                        <div class="page-bar col-md-9">
                            <div class="page-title-breadcrumb">
                                <div class=" pull-left">
                                    <div class="page-title">@yield('titulo_seccion')</div>
                                </div>
                                <div class="pull-right" style="padding-top:20px">
                                        @yield('opciones_breadcrumb')
                                </div>
                            </div>
                        </div>
                    </div>
