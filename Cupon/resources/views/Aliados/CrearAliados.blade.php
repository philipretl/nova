@extends('Secciones.Master')
@section('titulo', config('app.name').' - Crear Aliados')
@section('titulo_seccion', 'Crear Aliados')
@section ('css')
<style type="text/css">
 
</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <div class="card card-topline-aqua">

            <div class="card-body" id="bar-parent">
                {!! Form::open(['url' => $url, 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'FormAliados']) !!}

                @if(@$Aliado)
                    {!! method_field('patch') !!}
                    {{ Form::hidden('Id', Crypt::encrypt($Aliado->id), ['class' => 'form-control input-height', 'id' => 'Id']) }}                    
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

                                        
                            <div class="form-group {{ $errors->has('aliado_tipo') ? ' has-error' : '' }}">
                            <label class="col-md-3">Elija Tipo de CityAliado
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-8">
                                <select name="aliado_tipo" id="aliado_tipo" class="form-control">
                                    <option value="">[Elija]</option>
                                    <option @if(@$Aliado) @if($Aliado->aliado_tipo==1) selected @endif @endif value="1">Persona Natural</option>
                                    <option @if(@$Aliado) @if($Aliado->aliado_tipo==2) selected @endif @endif value="2">Empresa</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_nombres') ? ' has-error' : '' }} Aliados Aliado1 @if(@$Aliado) @if($Aliado->aliado_tipo!=1) hide @endif @else hide  @endif">
                            <label class="col-md-3">Nombres
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_nombres', (@$Aliado) ? $Aliado->aliado_nombres : old('aliado_nombres'), ['class' => 'form-control input-registro', 'id' => 'aliado_nombres']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_apellidos') ? ' has-error' : '' }} Aliados Aliado1 @if(@$Aliado) @if($Aliado->aliado_tipo!=1) hide @endif @else hide  @endif">
                            <label class="col-md-3">Apellidos
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_apellidos', (@$Aliado) ? $Aliado->aliado_apellidos : old('aliado_apellidos'), ['class' => 'form-control input-registro', 'id' => 'aliado_apellidos']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_razon_social') ? ' has-error' : '' }} Aliados Aliado2 @if(@$Aliado) @if($Aliado->aliado_tipo!=2) hide @endif @else hide  @endif">
                            <label class="col-md-3">Razón Social
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_razon_social', (@$Aliado) ? $Aliado->aliado_razon_social : old('aliado_razon_social'), ['class' => 'form-control input-registro', 'id' => 'aliado_razon_social']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_nit') ? ' has-error' : '' }} ">
                            <label class="col-md-3">NIT
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_nit', (@$Aliado) ? $Aliado->aliado_nit : old('aliado_nit'), ['class' => 'form-control input-registro', 'id' => 'aliado_nit']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_direccion') ? ' has-error' : '' }} ">
                            <label class="col-md-3">Dirección
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_direccion', (@$Aliado) ? $Aliado->aliado_direccion : old('aliado_direccion'), ['class' => 'form-control input-registro', 'id' => 'aliado_direccion']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_ciudad') ? ' has-error' : '' }} ">
                            <label class="col-md-3">Ciudad
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_ciudad', (@$Aliado) ? $Aliado->aliado_ciudad : old('aliado_ciudad'), ['class' => 'form-control input-registro', 'id' => 'aliado_ciudad']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_pais') ? ' has-error' : '' }} ">
                            <label class="col-md-3">Pais
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_pais', (@$Aliado) ? $Aliado->aliado_pais : old('aliado_pais'), ['class' => 'form-control input-registro', 'id' => 'aliado_pais']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_telefono_fijo') ? ' has-error' : '' }} ">
                            <label class="col-md-3">Teléfono Fijo
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_telefono_fijo', (@$Aliado) ? $Aliado->aliado_telefono_fijo : old('aliado_telefono_fijo'), ['class' => 'form-control input-registro', 'id' => 'aliado_telefono_fijo']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_telefono_celular') ? ' has-error' : '' }} ">
                            <label class="col-md-3">Teléfono Celular
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_telefono_celular', (@$Aliado) ? $Aliado->aliado_telefono_celular : old('aliado_telefono_celular'), ['class' => 'form-control input-registro', 'id' => 'aliado_telefono_celular']) }}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('aliado_email') ? ' has-error' : '' }} ">
                            <label class="col-md-3">Email
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_email', (@$Aliado) ? $Aliado->aliado_email : old('aliado_email'), ['class' => 'form-control input-registro', 'id' => 'aliado_email']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_web') ? ' has-error' : '' }} ">
                            <label class="col-md-3">Web
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_web', (@$Aliado) ? $Aliado->aliado_web : old('aliado_web'), ['class' => 'form-control input-registro', 'id' => 'aliado_web']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_descripcion') ? ' has-error' : '' }} ">
                            <label class="col-md-3">Descripción de tu negocio
                            </label>
                            <div class="col-md-8">
                                {{ Form::textarea('aliado_descripcion', (@$Aliado) ? $Aliado->aliado_descripcion : old('aliado_descripcion'), ['class' => 'form-control input-registro', 'id' => 'aliado_descripcion']) }}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('aliado_ofrece') ? ' has-error' : '' }}">
                            <label class="col-md-3">¿Qué Productos o Servicios Ofreces?
                            </label>
                            <div class="col-md-8">
                                {{ Form::text('aliado_ofrece', (@$Aliado) ? $Aliado->aliado_ofrece : old('aliado_ofrece'), ['class' => 'form-control input-registro', 'id' => 'aliado_ofrece']) }}
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
    <script src="{{ asset('js/FormAliados.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $("#aliado_tipo").change(function(){
            var tipo = $(this).val();
            $('.Aliados').addClass('hide');
            $('.Aliado'+tipo).removeClass('hide');
        });
    </script>
    @stop