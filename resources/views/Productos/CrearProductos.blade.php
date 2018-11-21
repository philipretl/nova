@extends('Secciones.Master')
@section('titulo', config('app.name').' - Crear Productos')
@section('titulo_seccion', 'Crear Productos')

@section ('css')
<link href="{{ asset('css/w3.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
  .bootstrap-tagsinput{width: 100% !important;}
</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-topline-aqua" id="FormWizard_Producto">
            <div class="card-head">
            </div>
            <div class="card-body" id="bar-parent">
                {!! Form::open(['url' => $url, 'enctype' => 'multipart/form-data', 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'FormProducto']) !!}

                @if(@$Producto)
                    {!! method_field('patch') !!}
                    {{ Form::hidden('Id', Crypt::encrypt($Producto->id), ['class' => 'form-control input-height', 'id' => 'Id']) }}                    
                @endif

                    <div class="form-wizard">
                        <div class="form-body">
                            <ul class="nav nav-pills nav-justified steps">
                                <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                        <span class="number"> 1 </span>
                                        <span class="desc">
                                        Datos del Producto</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tablast" data-toggle="tab" class="step active">
                                        <span class="number"> 2 </span>
                                        <span class="desc">
                                            Verificar Detalles
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div id="bar" class="progress progress-striped" role="progressbar">
                                <div class="progress-bar progress-bar-info"> </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Información Básica</h3>
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
                                            <label class="control-label col-md-3">Titulo
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('producto_titulo', (@$Producto) ? $Producto->producto_titulo : '', ['class' => 'form-control input-height', 'id' => 'producto_titulo']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Categoria
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::select('producto_categoria', $Categoria, '', ['class' => 'form-control input-height seleccion select2', 'id' => 'producto_categoria']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">SubCategoria
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::select('producto_subcategoria', $SubCategoria, '', ['class' => 'form-control seleccion select2', 'id' => 'producto_subcategoria']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Marca
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::select('producto_marca', $Marca, '', ['class' => 'form-control input-height seleccion select2', 'id' => 'producto_marca']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Aliado
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::select('producto_aliado', $Aliado, '', ['class' => 'form-control input-height seleccion select2', 'id' => 'producto_aliado']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Descripción
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::textarea('producto_descripcion', (@$Producto) ? $Producto->producto_descripcion : '', ['class' => 'form-control input-height summernote', 'id' => 'producto_descripcion']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Letra Menuda
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::textarea('producto_letra_chica', (@$Producto) ? $Producto->producto_letra_chica : '', ['class' => 'form-control input-height summernote', 'id' => 'producto_letra_chica']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email (Dueño del Produto)
                                                <span class="required"> </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('producto_email', (@$Producto) ? $Producto->producto_email : '', ['class' => 'form-control input-height', 'id' => 'producto_email']) }}
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3">NIT (Dueño del Produto)
                                                <span class="required"> </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('producto_nit', (@$Producto) ? $Producto->producto_nit : '', ['class' => 'form-control input-height', 'id' => 'producto_nit']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Palabras Clave
                                                <span class="required"> * (separe por coma) </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('producto_palabras_clave', (@$Producto) ? $Producto->producto_palabras_clave : '', ['class' => 'form-control input-height tags-input', 'id' => 'producto_palabras_clave']) }}
                                            </div>
                                        </div>

                                        <div class="form-group {{(@$Producto) ? '' : 'hide'}} CambiarImagen">
                                            <label class="control-label col-md-3">¿Desea Cambiar la Imagen Actual ?
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::checkbox('cambiar_imagen', '1', false, ['class' => 'cambiar_imagen', 'id' => 'cambiar_imagen']) }}
                                            </div>
                                        </div>

                                        <div class="form-group {{(@$Producto) ? '' : 'hide'}} VistaImagen">
                                            <div class="col-md-offset-5 col-md-6 text-center">
@if (@$Producto)
<div class="w3-content w3-display-container">
    @foreach (@$Producto->Imagenes as $Imagen)
    <img class="mySlides" src="{{(@$Producto) ? URL('public/img/productos/'.$Imagen->productoi_url) : ''}}" style="height:200px;margin: auto;">
    @endforeach
  <button class="w3-button w3-blue w3-display-left" type="button" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-blue w3-display-right" type="button" onclick="plusDivs(1)">&#10095;</button>
</div>
@endif
                                            </div>
                                        </div>

                                        <div class="form-group {{(@$Producto) ? 'hide' : ''}} SubirImagen">
                                            <label class="control-label col-md-3">Subir Imagen
                                                <span class="required"> * (jpg,png,jpeg) </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::file('producto_imagen[]', ['class' => 'form-control producto_imagen', 'id' => 'producto_imagen', 'multiple'=>'', 'accept'=> 'image/*']) }}
                                            </div>
                                        </div>

                                        <h3 class="block">Precios (<span class="cantidad_precios">@if (count(@$Producto->PreciosNoOfertas)>0) {{count($Producto->PreciosNoOfertas)}} @else 1 @endif
                                        </span>)</h3>
                                        
                                        <div class="form-group">
                                            <label class="col-xs-3 text-left">Titulo 
                                                <span class="required"> * </span></label>
                                            <label class="col-xs-1 text-left">Slider</label>
                                            <label class="col-xs-1 text-left">Cant.</label>
                                            <label class="col-xs-2 text-left">Total 
                                                <span class="required"> * </span></label>
                                            <label class="col-xs-2 text-left">Descuento %
                                                <span class="required"> * </span></label>
                                            <label class="col-xs-2 text-left">Total con Descuento 
                                                <span class="required"> * </span></label>
                                        </div>
                                        @if (@$Producto && count($Producto->PreciosNoOfertas)>0)
                                        <input type="hidden" name="cantidad_precios" id="cantidad_precios" value="{{count($Producto->PreciosNoOfertas)}}">
                                        <input type="hidden" name="precios_index" id="precios_index" value="{{count($Producto->PreciosNoOfertas)-1}}">
                                        <?php $i = 0; ?>
                                        @foreach ($Producto->PreciosNoOfertas as $precios)
                                        <div class="form-group" data-product-index="{{$i}}">
                                        <input type="hidden" name="id[{{$i}}]" value="{{$precios->id}}">
                                            <div class="col-xs-3">
                                                <input type="text" class="form-control productop_titulo" name="productop_titulo[{{$i}}]" placeholder="Titulo" id="productop_titulo_{{$i}}" value="{{$precios->productop_titulo}}" />
                                            </div>
                                            <div class="col-xs-1 text-center">
                                                <input type="checkbox"" name="productop_slider[{{$i}}]" placeholder="Slider" id="productop_slider_{{$i}}" value="1" @if ($precios->productop_slider==1) checked @endif />
                                            </div>
                                            <div class="col-xs-1 text-center">
                                                <input type="text" class="form-control productop_cantidad" name="productop_cantidad[{{$i}}]" placeholder="Cant." id="productop_cantidad_{{$i}}" value="{{$precios->productop_cantidad}}" />
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="number" class="form-control productop_total monto" name="productop_total[{{$i}}]" placeholder="Total" id="productop_total_{{$i}}" value="{{formato_cantidad_normal($precios->productop_total)}}" />
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="number" class="form-control productop_descuento monto" name="productop_descuento[{{$i}}]" placeholder="Descuento" id="productop_descuento_{{$i}}" value="{{formato_porcentaje($precios->productop_descuento)}}" />
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="number" class="form-control productop_total_descuento monto" name="productop_total_descuento[{{$i}}]" placeholder="Total con Descuento" id="productop_total_descuento_{{$i}}" value="{{formato_cantidad_normal($precios->productop_total_descuento)}}" readonly="" />
                                            </div>
                                            @if ($i==0)
                                            <div class="col-xs-1">
                                                <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
                                            </div>
                                            @else
                                            <div class="col-xs-1">
                                                <button type="button" class="btn btn-default removeButton" data-id="{{$precios->id}}"><i class="fa fa-minus"></i></button>
                                            </div>
                                            @endif
                                        </div>
                                        <?php $i++; ?>
                                        @endforeach
                                        @else
                                        @if (count(old('productop_titulo')))
                                            <input type="hidden" name="cantidad_precios" id="cantidad_precios" value="{{count(old('productop_titulo'))}}">
                                            <input type="hidden" name="precios_index" id="precios_index" value="{{count(old('productop_titulo'))-1}}">
                                            <?php $i = 0; ?>
                                            @foreach (old('productop_titulo') as $productop_titulo)
                                            <div class="form-group" data-product-index="{{$i}}">
                                            <input type="hidden" name="id[{{$i}}]" value="0">
                                            
                                            <div class="col-xs-3">
                                                    <input type="text" class="form-control productop_titulo" name="productop_titulo[{{$i}}]" placeholder="Titulo" id="productop_titulo_{{$i}}" value="{{$productop_titulo}}" />
                                                </div>
                                                <div class="col-xs-1 text-center">
                                                    <input type="checkbox" name="productop_slider[{{$i}}]" placeholder="Slider" id="productop_slider_{{$i}}" value="1" @if (@old('productop_slider'.$i)==1) checked @endif />
                                                </div>
                                                <div class="col-xs-1 text-center">
                                                    <input type="text" class="form-control productop_cantidad" name="productop_cantidad[{{$i}}]" placeholder="Cant." id="productop_cantidad_{{$i}}" value="{{old('productop_cantidad.'.$i)}}" />
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="number" class="form-control productop_total monto" name="productop_total[{{$i}}]" placeholder="Total" id="productop_total_{{$i}}" value="{{old('productop_total.'.$i)}}" />
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="number" class="form-control productop_descuento monto" name="productop_descuento[{{$i}}]" placeholder="Descuento" id="productop_descuento_{{$i}}" value="{{old('productop_descuento.'.$i)}}" />
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="number" class="form-control productop_total_descuento monto" name="productop_total_descuento[{{$i}}]" placeholder="Total con Descuento" id="productop_total_descuento_{{$i}}" readonly value="{{old('productop_total_descuento.'.$i)}}" />
                                                </div>

                                                @if ($i==0)
                                                <div class="col-xs-1">
                                                    <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
                                                </div>
                                                @else
                                                <div class="col-xs-1">
                                                    <button type="button" class="btn btn-default removeButton" data-id="{{$i}}"><i class="fa fa-minus"></i></button>
                                                </div>
                                                @endif
                                            </div>
                                            <?php $i++; ?>


                                            @endforeach

                                        @else
                                            <input type="hidden" name="cantidad_precios" id="cantidad_precios" value="1">
                                            <input type="hidden" name="precios_index" id="precios_index" value="0">
                                            <div class="form-group" data-product-index="0">
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control productop_titulo" name="productop_titulo[0]" placeholder="Titulo" id="productop_titulo_0" />
                                                </div>
                                                <div class="col-xs-1 text-center">
                                                    <input type="checkbox" name="productop_slider[0]" placeholder="Slider" id="productop_slider_0" value="1" />
                                                </div>
                                                <div class="col-xs-1 text-center">
                                                    <input type="text" class="form-control productop_cantidad" name="productop_cantidad[0]" placeholder="Cant." id="productop_cantidad_0" />
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="number" class="form-control productop_total monto" name="productop_total[0]" placeholder="Total" id="productop_total_0" />
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="number" class="form-control productop_descuento monto" name="productop_descuento[0]" placeholder="Descuento" id="productop_descuento_0" />
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="number" class="form-control productop_total_descuento monto" name="productop_total_descuento[0]" placeholder="Total con Descuento" id="productop_total_descuento_0" readonly />
                                                </div>
                                                <div class="col-xs-1">
                                                    <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                            @endif
                                        @endif

                                        <!-- The template for adding new field -->
                                        <div class="form-group hide" id="ProductoTemplate">
                                            <div class="col-xs-3">
                                                <input type="text" class="form-control" name="productop_titulo_empty" placeholder="Titulo" />
                                            </div>
                                            <div class="col-xs-1 text-center">
                                                <input type="checkbox" name="productop_slider_empty" placeholder="Slider" value="1" />
                                            </div>

                                            <div class="col-xs-1 text-center">
                                                <input type="text" class="form-control" name="productop_cantidad_empty" placeholder="Cant." />
                                            </div>

                                            <div class="col-xs-2">
                                                <input type="number" class="form-control" name="productop_total_empty" placeholder="Total" />
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="number" class="form-control" name="productop_descuento_empty" placeholder="Descuento" />
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="number" class="form-control" name="productop_total_descuento_empty" placeholder="Total con Descuento" readonly />
                                            </div>
                                            <div class="col-xs-1">
                                                <button type="button" class="btn btn-default removeButton" data-id="0"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>


                                    </div>
                                    
                                    <div class="tab-pane" id="tablast">
                                        <h3 class="block">Verificar Detalles</h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Titulo:</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static" data-display="producto_titulo"> </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Palabras Clave:</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static" data-display="producto_palabras_clave"> </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Cantidad de Precios:</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static" data-display="cantidad_precios"> </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="text-center col-md-12">
                                        <a href="javascript:;" class="btn btn-outline green-bgcolor  button-previous">
                                        <i class="fa fa-angle-left"></i> Anterior </a>
                                        <a href="javascript:;" class="btn btn-outline green-bgcolor button-next"> Siguiente
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-outline green-bgcolor button-submit"> Finalizar
                                            <i class="fa fa-check"></i>
                                        </a>
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
    <script src="{{ asset('js/FormWizard_Producto.js')}}" type="text/javascript"></script>

    <script type="text/javascript"> 
        @if (@$Producto)
        /* SI ESTAS EDITANTO, CAMBIA EL VALOR DEL PACIENTE QUE ESTA REGISTRADO */
        $("#producto_categoria").val("{{$Producto->producto_categoria}}").change();
        $("#producto_marca").val("{{$Producto->producto_marca}}").change();
        $("#producto_aliado").val("{{$Producto->producto_aliado}}").change();
        ComprobarSubCategorias({{$Producto->producto_categoria}});
        @endif

        /* COMPROBAR SUB CATEGORIAS AL CAMBIAR LA SERVICIO */
         $("#producto_categoria").on('change', function() {
            var IdCategoria = $(this).val();
            ComprobarSubCategorias(IdCategoria);
        });


        $('.summernote').summernote({
          height: 250, 
          lang: 'es-ES',
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear','codeview']],
            ['font', ['superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['link',['picture','link','video','table','hr']]
          ],
          codemirror: {
            theme: 'monokai'
          },
          callbacks: {
          onPaste: function (e) {
            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
            e.preventDefault();
            setTimeout( function(){
              document.execCommand( 'insertText', false, bufferText );
            }, 10 );
          }
        }
        });

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

        ProductoIndex = $("#precios_index").val();
        CantidadProducto = $("#cantidad_precios").val();
        $('#FormProducto')
        .on('click', '.addButton', function() {
            ProductoIndex++;
            CantidadProducto++;
            $(".cantidad_precios").html(CantidadProducto);
            $("#cantidad_precios").val(CantidadProducto);
            $("#precios_index").val(ProductoIndex);

            var $template = $('#ProductoTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-product-index', ProductoIndex)
                                .insertBefore($template);

            $clone
            .find('[name="productop_titulo_empty"]')
                .attr('name', 'productop_titulo[' + ProductoIndex + ']')
                .attr('id', 'productop_titulo_' + ProductoIndex + '')
                .attr('class', 'productop_titulo form-control').end()
            .find('[name="productop_slider_empty"]')
                .attr('name', 'productop_slider[' + ProductoIndex + ']')
                .attr('id', 'productop_slider_' + ProductoIndex + '')
                .attr('class', 'productop_slider').end()
            .find('[name="productop_cantidad_empty"]')
                .attr('name', 'productop_cantidad[' + ProductoIndex + ']')
                .attr('id', 'productop_cantidad_' + ProductoIndex + '')
                .attr('class', 'productop_cantidad form-control').end()
            .find('[name="productop_total_empty"]')
                .attr('name', 'productop_total[' + ProductoIndex + ']')
                .attr('id', 'productop_total_' + ProductoIndex + '')
                .attr('class', 'productop_total form-control monto').end()
            .find('[name="productop_descuento_empty"]')
                .attr('name', 'productop_descuento[' + ProductoIndex + ']')
                .attr('id', 'productop_descuento_' + ProductoIndex + '')
                .attr('class', 'productop_descuento form-control monto').end()
            .find('[name="productop_total_descuento_empty"]')
                .attr('name', 'productop_total_descuento[' + ProductoIndex + ']')
                .attr('id', 'productop_total_descuento_' + ProductoIndex + '')
                .attr('class', 'productop_total_descuento form-control monto').end();
        })

        .on('click', '.removeButton', function() {
            CantidadProducto--;

            var id = $(this).attr('data-id');
            if (id>0){
                var URL = "{!! (url('DesactivarPrecio')) !!}";
                $.ajax({
                    url: URL,
                    type: 'POST',
                    dataType: 'json',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {id:id, _token: $('meta[name=csrf-token]').attr('content') }
                })
                .done(function(data) {              
                });
            }

            $(".cantidad_precios").html(CantidadProducto);
            $("#cantidad_precios").val(CantidadProducto);
            var $row  = $(this).parents('.form-group'),
                index = $row.attr('data-product-index');
            $row.remove();



        })
        .on('keyup', '.productop_total', function() {
            var $val  = $(this).val(),
                $row  = $(this).parents('.form-group'),
                index = $row.attr('data-product-index');

                $('#productop_total_'+index).priceFormat({
                    prefix: '',
                    thousandsSeparator: '',
                    centsSeparator: '.',
                    clearOnEmpty: false
                });

                var descuento = $('#productop_descuento_'+index).val();
                var productop_total_descuento = parseFloat($val)*parseFloat(descuento);
                var productop_total_descuento = productop_total_descuento /100;
                var productop_total_descuento = parseFloat($val) - productop_total_descuento;
                $('#productop_total_descuento_'+index).val(Number(productop_total_descuento).toFixed(2));

        })
        .on('keyup', '.productop_descuento', function() {
            var $val  = $(this).val(),
                $row  = $(this).parents('.form-group'),
                index = $row.attr('data-product-index');

                $('#productop_descuento_'+index).priceFormat({
                    prefix: '',
                    thousandsSeparator: '',
                    centsSeparator: '.',
                    centsLimit: 0,
                    clearOnEmpty: false
                });

                var productop_total = $('#productop_total_'+index).val();
                var productop_total_descuento = parseFloat(productop_total)*parseFloat($val);
                var productop_total_descuento = productop_total_descuento /100;
                var productop_total_descuento = parseFloat(productop_total) - productop_total_descuento;
                $('#productop_total_descuento_'+index).val(Number(productop_total_descuento).toFixed(2));

        });


        /* FUNCION PARA COMPROBAR SUB CATEGORIAS DEPENDIENDO DEL ID DE CATEGORIA */
        function ComprobarSubCategorias(IdCategoria)
        {
            var URL = "{!! (url('SubCategoria_Select')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                dataType: 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: {id:IdCategoria, _token: $('meta[name=csrf-token]').attr('content') }
            })
            .done(function(data) {
                $('#producto_subcategoria').select2('data', null);
                $('#producto_subcategoria').empty().trigger("change");
                $("#producto_subcategoria").val(null).trigger("change");
                $('#producto_subcategoria').prepend('<option value="" selected="selected">[Elija]</option>');
                $.each(data, function(i, json) {
                    $("#producto_subcategoria").append($('<option>', {value:json.id, text: json.text}));             
                });
                /* CAMBIOS VALORES DEL SELECT SI ESTAS EDITANTO */
                @if (@$Producto)
                    <?php 
                        $producto_subcategoria = $Producto->producto_subcategoria;
                    ?>
                    var valorSubServicio="{{$producto_subcategoria}}";
                    var arraySubServicio = valorSubServicio.split(',');
                    $('#producto_subcategoria').val(arraySubServicio).trigger("change");
                @endif

            });
        }

        $(".tags-input").tagsinput({
          trimValue: true,
          maxTags: 5
        });
    </script>

    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
    </script>

    @stop