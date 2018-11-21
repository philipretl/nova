@extends('Secciones.Master')
@section('titulo', config('app.name').' - Crear Ofertas')
@section('titulo_seccion', 'Crear Ofertas')

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
                {!! Form::open(['url' => $url, 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'FormOferta']) !!}

                @if(@$Oferta)
                    {!! method_field('patch') !!}
                    {{ Form::hidden('Id', Crypt::encrypt($Oferta->id), ['class' => 'form-control input-height', 'id' => 'Id']) }}                    
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
                                            <label class="control-label col-md-3">Producto
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::select('productop_id', $Producto, '', ['class' => 'form-control input-height seleccion select2', 'id' => 'productop_id']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-3 DetalleProducto hide">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3"> &nbsp;
                                            </label>
                                            <div class="col-md-8">
                                                ¿Desea que esta Oferta salga en el Slider? &nbsp; 
                                                {{ Form::checkbox('productop_slider', '1', (@$Oferta) ?  (@$Oferta->productop_slider==1) ? 'true' : '' : '') }}
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3">Fecha de Inicio y Fin
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="hidden" readonly value="{{fecha_guion()}}" id="fecha_inicio" name="productop_fecha_inicio">
                                                <input type="hidden" readonly value="{{fecha_guion()}}" id="fecha_fin" name="productop_fecha_fin">
                                                <input type="hidden" readonly value="{{fecha_guion()}}" id="hoy">

                                                <div id="RangoFecha">
                                                  <i class="icon icon-calendar"></i>&nbsp;
                                                  <span></span> <b class="caret"></b> &nbsp;
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-offset-3 col-md-9 col-xs-12">
                                        <h3 class="block">Precio</h3>
                                        <div class="form-group">
                                            <label class="col-xs-3 text-left">Cantidad 
                                                <span class="required"> * </span></label>
                                            <label class="col-xs-3 text-left">Total 
                                                <span class="required"> * </span></label>
                                            <label class="col-xs-3 text-left">Descuento %
                                                <span class="required"> * </span></label>
                                            <label class="col-xs-3 text-left">Total con Descuento 
                                                <span class="required"> * </span></label>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-3">
                                                <input type="number" class="form-control productop_cantidad cantidad" name="productop_cantidad" placeholder="Cantidad" id="productop_cantidad" value="{{(@$Oferta) ? $Oferta->productop_cantidad : ''}}" />
                                            </div>
                                            <div class="col-xs-3">
                                                <input type="number" class="form-control productop_total monto" name="productop_total" placeholder="Total" id="productop_total" value="{{(@$Oferta) ? formato_cantidad_normal($Oferta->productop_total) : ''}}" />
                                            </div>
                                            <div class="col-xs-3">
                                                <input type="number" class="form-control productop_descuento monto" name="productop_descuento" placeholder="Descuento" id="productop_descuento" value="{{(@$Oferta) ? formato_cantidad_normal($Oferta->productop_descuento) : ''}}" />
                                            </div>
                                            <div class="col-xs-3">
                                                <input type="number" class="form-control productop_total_descuento monto" name="productop_total_descuento" placeholder="Total con Descuento" id="productop_total_descuento" value="{{(@$Oferta) ? formato_cantidad_normal($Oferta->productop_total_descuento) : ''}}" />
                                            </div>
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
    <script src="{{ asset('js/FormOfertas.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        @if (@$Oferta)
        /* SI ESTAS EDITANTO, CAMBIA EL VALOR DEL PACIENTE QUE ESTA REGISTRADO */
        $("#productop_id").val("{{$Oferta->productop_id}}").change();
        $("#fecha_inicio").val("{{$Oferta->productop_fecha_inicio}}");
        $("#fecha_fin").val("{{$Oferta->productop_fecha_fin}}");


        var Id = $("#productop_id").val();
            var URL = "{!! (url('DetalleProducto')) !!}";
                $.ajax({
                    url: URL,
                    type: 'POST',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {id:Id, _token: $('meta[name=csrf-token]').attr('content') }
                })
                .done(function(data) {
                    $(".DetalleProducto").removeClass('hide');
                    $(".DetalleProducto").html(data);
                });

        @endif

        /* COMPROBAR SUB CATEGORIAS AL CAMBIAR LA SERVICIO */
         $("#productop_id").on('change', function() {
            var Id = $(this).val();
            if (Id !=""){
                var URL = "{!! (url('DetalleProducto')) !!}";
                $.ajax({
                    url: URL,
                    type: 'POST',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {id:Id, _token: $('meta[name=csrf-token]').attr('content') }
                })
                .done(function(data) {
                    $(".DetalleProducto").removeClass('hide');
                    $(".DetalleProducto").html(data);
                });
            }
            else{
                $(".DetalleProducto").addClass('hide');
                $(".DetalleProducto").html('');
            }
        });

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

        $('#FormOferta')
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