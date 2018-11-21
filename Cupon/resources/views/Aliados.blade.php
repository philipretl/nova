@extends('Body')
@section('titulo', 'CityAliados')

@section('css')
<style type="text/css">
.encabezado {
    background: url(assets_page/img/all/image3.jpg) center center fixed;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    height: 150px;
    position: relative;
    overflow: hidden;
    opacity: 0.85;
}

.encabezado h1 {
    color: #fff;
    font-size: 3.5rem;
    position: absolute;
    left: 2rem;
    margin: auto;
    top: 0;
    bottom: 0;
    text-shadow: 0px 0px 7px #000000;
    font-weight: 300;
    z-index: 99;
    padding: 40px 0 40px 0;
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
                                <h3 style="font-size:35px;" class="parpadea"><span>CityAliados</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->

        <!-- //***Categories-Section start***// -->
<div class="categories-section bg padTB60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<div class="encabezado text-center">
				<h1>Pauta con Cuponcity</h1>
				</div>

				<p class="text-justify marT20 text-black">
						Si quieres ser parte de este equipo de trabajo sumando más y más  clientes , diseñamos para ti una campaña efectiva que busca potencializar tu negocio, siendo visible ante nuestro numeroso grupo de clientes y seguidores en redes sociales. 
						Cada día, Cuponcity envía a sus suscriptores y seguidores en redes, publicidad de sus inmejorables ofertas, algo que sin duda, incrementará las ventas de nuestros aliados, y lo mejor: suscribirse no tiene costo y sólo se paga cuando vendes! Diligencia nuestro formulario <strong>Solicitud de Vinculación como Aliado</strong> y pronto un asesor  se pondrá en contacto contigo.
				</p>

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<h2 class="bold text-black">¿Quieres publicar con nosotros?</h2>
            		{!! Form::open(['url' => route('Aliados'), 'method'=>'POST', 'class'=>'form-horizontal marL40', 'id'=>'FormAliados']) !!}
                        {{ csrf_field() }}
                        
                        @if (count($errors) > 0)
						<div class="alert alert-danger text-left">
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
							<label class="col-md-12">Elija Tipo de CityAliado
								<span class="required"> * </span>
							</label>
							<div class="col-md-12">
								<select name="aliado_tipo" id="aliado_tipo" class="form-control">
									<option value="">[Elija]</option>
									<option value="1">Persona Natural</option>
									<option value="2">Empresa</option>
								</select>
							</div>
						</div>

                        <div class="form-group {{ $errors->has('aliado_nombres') ? ' has-error' : '' }} Aliados Aliado1 hide">
							<label class="col-md-12">Nombres
								<span class="required"> * </span>
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_nombres', old('aliado_nombres'), ['class' => 'form-control input-registro', 'id' => 'aliado_nombres']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_apellidos') ? ' has-error' : '' }} Aliados Aliado1 hide">
							<label class="col-md-12">Apellidos
								<span class="required"> * </span>
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_apellidos', old('aliado_apellidos'), ['class' => 'form-control input-registro', 'id' => 'aliado_apellidos']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_razon_social') ? ' has-error' : '' }} Aliados Aliado2 hide">
							<label class="col-md-12">Razón Social
								<span class="required"> * </span>
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_razon_social', old('aliado_razon_social'), ['class' => 'form-control input-registro', 'id' => 'aliado_razon_social']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_nit') ? ' has-error' : '' }} ">
							<label class="col-md-12">NIT
								<span class="required"> * </span>
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_nit', old('aliado_nit'), ['class' => 'form-control input-registro', 'id' => 'aliado_nit']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_direccion') ? ' has-error' : '' }} ">
							<label class="col-md-12">Dirección
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_direccion', old('aliado_direccion'), ['class' => 'form-control input-registro', 'id' => 'aliado_direccion']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_ciudad') ? ' has-error' : '' }} ">
							<label class="col-md-12">Ciudad
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_ciudad', old('aliado_ciudad'), ['class' => 'form-control input-registro', 'id' => 'aliado_ciudad']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_pais') ? ' has-error' : '' }} ">
							<label class="col-md-12">Pais
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_pais', old('aliado_pais'), ['class' => 'form-control input-registro', 'id' => 'aliado_pais']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_telefono_fijo') ? ' has-error' : '' }} ">
							<label class="col-md-12">Teléfono Fijo
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_telefono_fijo', old('aliado_telefono_fijo'), ['class' => 'form-control input-registro', 'id' => 'aliado_telefono_fijo']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_telefono_celular') ? ' has-error' : '' }} ">
							<label class="col-md-12">Teléfono Celular
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_telefono_celular', old('aliado_telefono_celular'), ['class' => 'form-control input-registro', 'id' => 'aliado_telefono_celular']) }}
							</div>
						</div>
						<div class="form-group {{ $errors->has('aliado_email') ? ' has-error' : '' }} ">
							<label class="col-md-12">Email
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_email', old('aliado_email'), ['class' => 'form-control input-registro', 'id' => 'aliado_email']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_web') ? ' has-error' : '' }} ">
							<label class="col-md-12">Web
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_web', old('aliado_web'), ['class' => 'form-control input-registro', 'id' => 'aliado_web']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_descripcion') ? ' has-error' : '' }} ">
							<label class="col-md-12">Descripción de tu negocio
							</label>
							<div class="col-md-12">
								{{ Form::textarea('aliado_descripcion', old('aliado_descripcion'), ['class' => 'form-control input-registro', 'id' => 'aliado_descripcion']) }}
							</div>
						</div>

						<div class="form-group {{ $errors->has('aliado_ofrece') ? ' has-error' : '' }}">
							<label class="col-md-12">¿Qué Productos o Servicios Ofreces?
							</label>
							<div class="col-md-12">
								{{ Form::text('aliado_ofrece', old('aliado_ofrece'), ['class' => 'form-control input-registro', 'id' => 'aliado_ofrece']) }}
							</div>
						</div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Enviar
                                </button>
                            </div>
                        </div>
				{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop



@section('script')
<script src="{{ asset('js/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-validation/js/localization/messages_es.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('js/FormAliados.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	$("#aliado_tipo").change(function(){
		var tipo = $(this).val();
		$('.Aliados').addClass('hide');
		$('.Aliado'+tipo).removeClass('hide');
	});
</script>
@stop