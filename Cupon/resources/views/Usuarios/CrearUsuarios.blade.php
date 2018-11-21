@extends('Secciones.Master')
@section('titulo', config('app.name').' - Crear Usuarios')
@section('titulo_seccion', 'Crear Usuarios')
@section ('style')
<style type="text/css">
  .dz-max-files-reached {background-color: red};
</style>
@stop
@section('content')
<div class="row">
    <div class="col-md-9 col-sm-9">
        <div class="card card-topline-aqua" id="FormWizard_User">
            <div class="card-head">
            </div>
            <div class="card-body" id="bar-parent">
                {!! Form::open(['url' => $url, 'method'=>'POST', 'class'=>'form-horizontal', 'id'=>'FormUser']) !!}

                @if(@$User)
                    {!! method_field('patch') !!}
                    {{ Form::hidden('Id', Crypt::encrypt($User->id), ['class' => 'form-control input-height', 'id' => 'Id']) }}                    
                @endif

                    <div class="form-wizard">
                        <div class="form-body">
                            <ul class="nav nav-pills nav-justified steps">
                                <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                        <span class="number"> 1 </span>
                                        <span class="desc">
                                        Datos del Usuario</span>
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
                                    <h3 class="block">Perfil Básico</h3>
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
                                            <label class="control-label col-md-5">Nombre
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                {{ Form::text('users_nombre', (@$User) ? $User->users_nombre : '', ['class' => 'form-control input-height', 'id' => 'users_nombre']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-5">Apellidos
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                {{ Form::text('users_apellido', (@$User) ? $User->users_apellido : '', ['class' => 'form-control input-height', 'id' => 'users_apellido']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-5">Email
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                @if (@$User=="")
                                                {{ Form::text('email', (@$User) ? $User->email : '', ['class' => 'form-control input-height', 'id' => 'email']) }}
                                                @else
                                                {{ Form::hidden('email', (@$User) ? $User->email : '', ['class' => 'form-control input-height', 'id' => 'email', 'readonly'=>'']) }}
                                                {{$User->email}}
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-5">Teléfono
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                {{ Form::text('users_telefono', (@$User) ? $User->users_telefono : '', ['class' => 'form-control input-height', 'id' => 'users_telefono']) }}
                                            </div>
                                        </div>

                                        @if(@!$User)
                                        <div class="form-group">
                                            <label class="control-label col-md-5">Contraseña
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">

                                                {{ Form::password('password', ['class' => 'form-control input-height', 'id' => 'FormUser_password']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-5">Confirmar Contraseña
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-5">
                                                {{ Form::password('rpassword', ['class' => 'form-control input-height', 'id' => 'rpassword']) }}
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                    
                                    <div class="tab-pane" id="tablast">
                                        <h3 class="block">Verificar Detalles</h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-5">Nombre:</label>
                                            <div class="col-md-5">
                                                <p class="form-control-static" data-display="users_nombre"> </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-5">Apellido:</label>
                                            <div class="col-md-5">
                                                <p class="form-control-static" data-display="users_apellido"> </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-5">Email:</label>
                                            <div class="col-md-5">
                                                <p class="form-control-static" data-display="email">{{@$User->email}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-5">Tele´fono:</label>
                                            <div class="col-md-5">
                                                <p class="form-control-static" data-display="email">{{@$User->users_telefono}}</p>
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
    <script src="{{ asset('js/FormWizard_User.js')}}" type="text/javascript"></script>
    @stop