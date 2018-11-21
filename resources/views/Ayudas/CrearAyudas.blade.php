@extends('Secciones.Master')
@section('titulo', config('app.name').' - Crear Ayudas')
@section('titulo_seccion', 'Crear Ayudas')
@section ('css')
<style type="text/css">
 
</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-topline-aqua">

            <div class="card-body" id="bar-parent">
                {!! Form::open(['url' => $url, 'enctype' => 'multipart/form-data', 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'FormAyuda']) !!}

                @if(@$Ayuda)
                    {!! method_field('patch') !!}
                    {{ Form::hidden('Id', Crypt::encrypt($Ayuda->id), ['class' => 'form-control input-height', 'id' => 'Id']) }}                    
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
                                            <label class="control-label col-md-3">Categoria
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::select('ayudas_cat_id', $Categoria, '', ['class' => 'form-control input-height seleccion select2', 'id' => 'ayudas_cat_id']) }}
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Titulo
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::text('ayudas_titulo', (@$Ayuda) ? $Ayuda->ayudas_titulo : '', ['class' => 'form-control input-height', 'id' => 'ayudas_titulo']) }}
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3">Descripción
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                {{ Form::textarea('ayudas_descripcion', (@$Ayuda) ? $Ayuda->ayudas_descripcion : '', ['class' => 'form-control input-height summernote', 'id' => 'ayudas_descripcion']) }}
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
    <script src="{{ asset('js/FormAyudas.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        @if (@$Ayuda)
        /* SI ESTAS EDITANTO, CAMBIA EL VALOR DEL PACIENTE QUE ESTA REGISTRADO */
        $("#ayudas_cat_id").val("{{$Ayuda->ayudas_cat_id}}").change();
        @endif


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

    </script>
    @stop