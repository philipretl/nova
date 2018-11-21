@extends('Body')
@section('titulo', 'Contáctenos')

@section('css')
<style type="text/css">
    .comments-form input[type="text"]{
        padding: 10px;
    }
    .comments-form textarea{
        padding: 10px;
    }
</style>
@stop

@section('content')

       <!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span>Contáctenos</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->
        
        <!-- //***coupons-details Start***// -->
        <div class="deals bg padTB60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                    {!! Form::open(['url' => URL('EmailContactenos'), 'method'=>'POST', 'class'=>'form-horizontal comments-form', 'id'=>'FormContacto']) !!}

                    @if (session('mensaje'))
                    <div class="alert alert-{{ session('tipo') }} alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('mensaje') }}
                    </div>
                    @endif


                    <div class="col-md-6 col-sm-12 col-xs-12 marB30">
                        <div class="form-group">
                            <input type="text" name="nombre" value="" placeholder="Nombre y Apellido">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 marB30">
                        <div class="form-group">
                            <input type="text" name="email" value="" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="form-group">
                            <textarea placeholder="Mensaje" rows="5" name="mensaje"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <button type="submit" class="itg-btn subcribes btn-lg"><i class="fa fa-envelope"></i> Enviar Mensaje</button>
                    </div>
                    {!! Form::close() !!}
                </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="location-map marT50">
                            <div id='gmap_canvas'></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- //***coupons-details End***// -->
@stop

@section ('script')
<script src="{{ asset('js/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-validation/js/localization/messages_es.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/FormContacto.js')}}" type="text/javascript"></script>
@stop