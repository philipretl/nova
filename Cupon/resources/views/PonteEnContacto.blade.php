@extends('BodyAyuda')
@section('titulo', 'Ponte en Contacto con CuponCity')
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
                        <h3><span>Ponte en Contacto con CuponCity</span></h3>
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
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    {!! Form::open(['url' => URL('EmailContactenosAyuda'), 'enctype' => 'multipart/form-data', 'method'=>'POST', 'class'=>'form-horizontal comments-form', 'id'=>'FormContactoAyuda']) !!}

                     @if (session('mensaje'))
                    <div class="alert alert-{{ session('tipo') }} alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('mensaje') }}
                    </div>
                    @endif

                    
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="form-group">
                            <label class="control-label col-md-3">Tipo de Consulta
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-8">
                                {{ Form::select('tipo', $Categoria, '', ['class' => 'form-control input-height seleccion select2', 'id' => 'tipo']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="form-group">
                            <label class="control-label col-md-3">Motivo de Consulta
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-8">
                                {{ Form::select('motivo', $Motivo, '', ['class' => 'form-control input-height seleccion select2', 'id' => 'motivo']) }}
                            </div>
                        </div>
                    </div>
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
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                    <div class="form-group">
                        <label class="control-label col-md-3">Subir Archivo
                        </label>
                        <div class="col-md-8">
                            {{ Form::file('archivo_adjunto', ['class' => 'form-control', 'id' => 'archivo_adjunto']) }}
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <button type="submit" class="itg-btn subcribes btn-lg"><i class="fa fa-envelope"></i> Enviar</button>

                        <a href="{{URL('Ayuda')}}" class="itg-btn btn-lg btn-default"><i class="fa fa-question"></i> City Inquietudes</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <div class="comments-form DetalleCategoriaAyuda">
                    </div>
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
<script src="{{ asset('js/FormContactoAyuda.js')}}" type="text/javascript"></script>

<script type="text/javascript">

    @if (@$GetCat)
        var GetCat="{{$GetCat}}";
        $('#tipo').val(GetCat).trigger("change");
        ComprobarAyudas(GetCat);
    @endif
    
    /* COMPROBAR SUB CATEGORIAS AL CAMBIAR LA SERVICIO */
         $("#tipo").on('change', function() {
            var tipo = $(this).val();
            ComprobarAyudas(tipo);
        });

    /* FUNCION PARA COMPROBAR SUB CATEGORIAS DEPENDIENDO DEL ID DE CATEGORIA */
        function ComprobarAyudas(tipo)
        {
            var URL = "{!! (url('Ayuda_Select')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                dataType: 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: {id:tipo, _token: $('meta[name=csrf-token]').attr('content') }
            })
            .done(function(data) {
                $('#motivo').select2('data', null);
                $('#motivo').empty().trigger("change");
                $("#motivo").val(null).trigger("change");
                $('#motivo').prepend('<option value="" selected="selected">[Elija]</option>');
                $.each(data, function(i, json) {
                    $("#motivo").append($('<option>', {value:json.id, text: json.text}));             
                });

                /* CAMBIOS VALORES DEL SELECT SI ESTAS EDITANTO */

                @if (@$GetMot)
                    var GetMot="{{$GetMot}}";
                    $('#motivo').val(GetMot).trigger("change");
                @endif
            });
        }
</script>
@stop