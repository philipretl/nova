@extends('Secciones.Master')
@section('titulo', config('app.name').' - Crear Marcas')
@section('titulo_seccion', 'Crear Marcas')
@section ('css')
<link href="{{asset('js/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

<style type="text/css">
  #RangoFecha{
            cursor: pointer;
            padding: 5px 10px; 
            font-size:18px; 
            font-weight: bold;
            display: inline-block;
        }
</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-topline-aqua">

            <div class="card-body" id="bar-parent">
                {!! Form::open(['url' => $url, 'enctype' => 'multipart/form-data', 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'FormMarca']) !!}

                @if(@$Marca)
                    {!! method_field('patch') !!}
                    {{ Form::hidden('Id', Crypt::encrypt($Marca->id), ['class' => 'form-control input-height', 'id' => 'Id']) }}                    
                @endif
                        <div class="form-body">
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger text-left pl-40">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    @if (session('mensaje'))
                                        <div class="alert alert-{{ session('tipo') }} alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ session('mensaje') }}
                                        </div>
                                    @endif
                                    
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Nombre
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('marca_nombre', (@$Marca) ? $Marca->marca_nombre : '', ['class' => 'form-control input-height', 'id' => 'marca_nombre']) }}
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3">Tiempo de Publicación
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="hidden" readonly value="{{fecha_guion()}}" id="fecha_inicio" name="marca_fecha_inicio">
                                                <input type="hidden" readonly value="{{fecha_guion()}}" id="fecha_fin" name="marca_fecha_fin">
                                                <input type="hidden" readonly value="{{fecha_guion()}}" id="hoy">

                                                <div id="RangoFecha">
                                                  <i class="icon icon-calendar"></i>&nbsp;
                                                  <span></span> <b class="caret"></b> &nbsp;
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group {{(@$Marca) ? '' : 'hide'}} CambiarImagen">
                                            <label class="control-label col-md-3">¿Desea Cambiar la Imagen Actual ?
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::checkbox('cambiar_imagen', '1', false, ['class' => 'cambiar_imagen', 'id' => 'cambiar_imagen']) }}
                                            </div>
                                        </div>

                                        <div class="form-group {{(@$Marca) ? '' : 'hide'}} VistaImagen">
                                            <div class="col-md-offset-3 col-md-8 text-center">
                                                <img src="{{(@$Marca) ? URL('public/img/marcas/'.$Marca->marca_imagen) : ''}}" height="100px">
                                            </div>
                                        </div>

                                        <div class="form-group {{(@$Marca) ? 'hide' : ''}} SubirImagen">
                                            <label class="control-label col-md-3">Subir Imagen
                                                <span class="required"> * (jpg,png,jpeg) </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::file('marca_imagen', ['class' => 'form-control marca_imagen', 'id' => 'marca_imagen', 'accept'=> 'image/*']) }}
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Dirección
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('marca_direccion', (@$Marca) ? $Marca->marca_direccion : '', ['class' => 'form-control input-height', 'id' => 'marca_direccion']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Teléfono
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('marca_telefono', (@$Marca) ? $Marca->marca_telefono : '', ['class' => 'form-control input-height', 'id' => 'marca_telefono']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Youtube
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('marca_youtube', (@$Marca) ? $Marca->marca_youtube : '', ['class' => 'form-control input-height', 'id' => 'marca_youtube']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">URL
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('marca_url', (@$Marca) ? $Marca->marca_url : '', ['class' => 'form-control input-height', 'id' => 'marca_url']) }}
                                            </div>
                                        </div>

                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="text-center col-md-12">
                                                <button type="submit" class="btn btn-outline green-bgcolor"> Guardar Datos
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @stop

    @section('script')
    <!-- VALIDACION DE FORMULARIO DE REGISTRO DE USUARIO -->
    <script src="{{ asset('js/FormMarcas.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>

    <script type="text/javascript"> 
        $("#cambiar_imagen").click(function(){
            if ($('#cambiar_imagen').is(':checked')) {
                $(".VistaImagen").addClass('hide');
                $(".SubirImagen").removeClass('hide');
            }
            else{
                $(".VistaImagen").removeClass('hide');
                $(".SubirImagen").addClass('hide');
            }
        });


        @if (@$Marca)
        /* SI ESTAS EDITANTO, CAMBIA EL VALOR DEL PACIENTE QUE ESTA REGISTRADO */
        $("#fecha_inicio").val("{{$Marca->marca_fecha_inicio}}");
        $("#fecha_fin").val("{{$Marca->marca_fecha_fin}}");
        @endif

    function BuscarRango()
    {
        var fecha_inicio = $("#fecha_inicio").val();
        var fecha_fin = $("#fecha_fin").val();
        VerConsulta(fecha_inicio,fecha_fin);
    }

  var fi = $("#fecha_inicio").val();
  var ff = $("#fecha_fin").val();
  var today = $("#hoy").val();

  var start = moment(fi, 'YYYY-MM-DD');
  var end = moment(ff, 'YYYY-MM-DD');
  var today = moment(today, 'YYYY-MM-DD');

      function RangoFechas(start, end) {
            $('#RangoFecha span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
            var fecha_inicio = start.format('YYYY-MM-DD');
            var fecha_fin = end.format('YYYY-MM-DD');

            $("#fecha_inicio").val(fecha_inicio);
            $("#fecha_fin").val(fecha_fin);
        }
        $('#RangoFecha').daterangepicker({
            startDate: start,
            endDate: end,
            locale: {
              format: 'DD/MM/YYYY',
              applyLabel: 'Aplicar',
              cancelLabel: 'Cancelar',
              customRangeLabel: 'Rango Personalizado'
            },
            opens: "left",
            ranges: {
               "Hoy": [moment(), moment()],
               "Ayer": [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               "Ultimos 7 Dias": [moment().subtract(6, 'days'), moment()],
               "Ultimos 30 Dias": [moment().subtract(29, 'days'), moment()],
               "Este mes": [moment().startOf('month'), moment().endOf('month')],
               "Mes Anterior": [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
               "Este año": [moment().startOf('year'), moment().endOf('year')]
            }
        }, RangoFechas);

        RangoFechas(start, end);

        $('.cantidad').priceFormat({
            prefix: '',
            centsLimit: 0,
            clearOnEmpty: true
        });

        $('.monto').priceFormat({
            prefix: '',
            thousandsSeparator: '',
            centsSeparator: '.',
            centsLimit: 2,
            clearOnEmpty: false
        });

        $('#FormMarca')
        .on('keyup', '.productop_total', function() {
            var $val  = $(this).val();

                $('#productop_total').priceFormat({
                    prefix: '',
                    thousandsSeparator: '',
                    centsSeparator: '.',
                    clearOnEmpty: false
                });

                var descuento = $('#productop_descuento').val();
                var productop_total_descuento = parseFloat($val)*parseFloat(descuento);
                var productop_total_descuento = productop_total_descuento /100;
                var productop_total_descuento = parseFloat($val) - productop_total_descuento;
                $('#productop_total_descuento').val(Number(productop_total_descuento).toFixed(2));

        })
        .on('keyup', '.productop_descuento', function() {
            var $val  = $(this).val();

                $('#productop_descuento').priceFormat({
                    prefix: '',
                    thousandsSeparator: '',
                    centsSeparator: '.',
                    centsLimit: 0,
                    clearOnEmpty: false
                });

                var productop_total = $('#productop_total').val();
                var productop_total_descuento = parseFloat(productop_total)*parseFloat($val);
                var productop_total_descuento = productop_total_descuento /100;
                var productop_total_descuento = parseFloat(productop_total) - productop_total_descuento;
                $('#productop_total_descuento').val(Number(productop_total_descuento).toFixed(2));

        });
    </script>
    @stop