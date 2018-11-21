@extends('Secciones.Master')
@section('titulo', config('app.name').' - Categorías')
@section('titulo_seccion', 'Categorías')
@section ('style')
<style type="text/css">
</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-topline-aqua">
            <div class="card-body" id="bar-parent">
                {!! Form::open(['url' => $url, 'enctype' => 'multipart/form-data', 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'FormConf']) !!}
                @if(@$ConfCategoria)
                {!! method_field('patch') !!}
                {{ Form::hidden('Id', Crypt::encrypt($ConfCategoria->id), ['class' => 'form-control input-height', 'id' => 'Id']) }}
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
                            {{ Form::text('nombre', (@$ConfCategoria) ? $ConfCategoria->conf_cat_nombre : '', ['class' => 'form-control input-height', 'id' => 'nombre']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Condiciones
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-8">
                            {{ Form::textarea('condiciones', (@$ConfCategoria) ? $ConfCategoria->conf_cat_condiciones : '', ['class' => 'form-control input-height summernote', 'id' => 'condiciones']) }}
                        </div>
                    </div>

                    <div class="form-group {{(@$ConfCategoria) ? '' : 'hide'}} CambiarImagen">
                        <label class="control-label col-md-3">¿Desea Cambiar la Imagen Actual ?
                        </label>
                        <div class="col-md-8">
                            {{ Form::checkbox('cambiar_imagen', '1', false, ['class' => 'cambiar_imagen', 'id' => 'cambiar_imagen']) }}
                        </div>
                    </div>
                    <div class="form-group {{(@$ConfCategoria) ? '' : 'hide'}} VistaImagen">
                        <div class="col-md-offset-3 col-md-8 text-center">
                            <img src="{{(@$ConfCategoria) ? URL('public/img/categorias/'.$ConfCategoria->conf_cat_imagen) : ''}}" height="100px">
                        </div>
                    </div>
                    <div class="form-group {{(@$ConfCategoria) ? 'hide' : ''}} SubirImagen">
                        <label class="control-label col-md-3">Subir Imagen
                            <span class="required"> * (jpg,png,jpeg) </span>
                        </label>
                        <div class="col-md-8">
                            {{ Form::file('imagen', ['class' => 'form-control imagen', 'id' => 'imagen', 'accept'=> 'image/*']) }}
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
    <div class="col-md-12">
        <div class="card card-topline-aqua">
            <div class="card-body" id="bar-parent">
                <table class="table table-striped table-bordered table-hover order-column valign-middle tabla-consulta">
                    <thead>
                        <tr>
                            <th class="sorting"> Nombre </th>
                            <th class="sorting"> Estatus </th>
                            <th class="sorting"> Imagen </th>
                            <th class="sorting"> Opciones </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ListaCategorias as $lista_categorias)
                        <?php $id_crypt = Crypt::encrypt($lista_categorias->id); ?>
                        <tr class="odd gradeX Categoria{{$lista_categorias->id}}">
                            <td>{{$lista_categorias->conf_cat_nombre}}</td>
                            <td class="left">
                                <label class="switchToggle">
                                    <input type="checkbox" onclick="Estatus('{{$id_crypt}}','{{$lista_categorias->id}}')" @if ($lista_categorias->conf_cat_estatus==1) checked @endif class="Estatus-{{$lista_categorias->id}}">
                                    <span class="slider red"></span>
                                </label>
                            </td>
                            <td>
                                <img src="{{URL('public/img/categorias/'.$lista_categorias->conf_cat_imagen)}}" height="40px">
                            </td>
                            <td>
                                <a href="{{route('MostrarCategoria', ['id' => $id_crypt])}}" title="Editar Registro" data-toggle="tooltip" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
<!-- VALIDACION DE FORMULARIO DE REGISTRO DE USUARIO -->
<script src="{{ asset('js/FormConf.js')}}" type="text/javascript"></script>
<script type="text/javascript">

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

function Estatus(id_crypt,id)
    {   
        if ($('.Estatus-'+id).prop('checked')) {var estatus = 1;}else{var estatus = 0;}

        var URL = "{!! (url('CambiarEstatus')) !!}";
        $.ajax({
            url: URL,
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{tabla:'conf_categorias', campo:'conf_cat_estatus', id:id_crypt, estatus:estatus,_token: $('meta[name=csrf-token]').attr('content')},
            success: function(data) {}
        });
    }

</script>
@stop