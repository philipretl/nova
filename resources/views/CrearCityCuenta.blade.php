@extends('Body')

@section('titulo', 'Crear City Cuenta')

@section('content')
<!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span>Crear City Cuenta</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->

    <div class="row">
        <div class="col-md-4 col-md-offset-4 marT50 marB50 bg-white">

                <div class="panel-body form-login">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="FormRegister">
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


                        <div class="form-group {{ $errors->has('users_nombre') ? ' has-error' : '' }}">
                            <label class="bold">Nombre</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="users_nombre" name="users_nombre" required="" value="{{ old('users_nombre') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('users_apellido') ? ' has-error' : '' }}">
                            <label class="bold">Apellido</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="users_apellido" name="users_apellido" required="" value="{{ old('users_apellido') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('users_direccion') ? ' has-error' : '' }}">
                            <label class="bold">Dirección</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="users_direccion" name="users_direccion" value="{{ old('users_direccion') }}" autofocus>
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('users_telefono') ? ' has-error' : '' }}">
                            <label class="bold">Teléfono</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="users_telefono" name="users_telefono" value="{{ old('users_telefono') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="bold">Email (Nombre de Usuario)</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="email" name="email" required="" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="bold">Contraseña</label>
                            <div class="text-center"><input type="password" class="form-control input-registro" id="password" name="password" required="" value="" autofocus>
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('aceptar_politicas') ? ' has-error' : '' }}" style="margin-top:15px;margin-bottom:15px;">
                            <input type="checkbox" id="aceptar_politicas" name="aceptar_politicas" required="" value="1" autofocus style="position: relative;visibility: visible;width: 15px;height: 15px;"> <label class="bold">Autorizo el <a href="{{route('ProteccionDeDatos')}}" target="_blank" class="link bold" style="    color: #FBC40B;">manejo de datos</a> suministrados</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" disabled class="Registrarme btn btn-primary btn-lg">
                                    Registrarme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection

@section('script')
<script src="{{ asset('js/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-validation/js/localization/messages_es.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('js/FormRegister.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    $("#aceptar_politicas").click(function(){
        if ($('#aceptar_politicas').prop('checked')) {
            $(".Registrarme").prop('disabled',false);
        }
        else{
            $(".Registrarme").prop('disabled',true);
        }
    });

    $("#showhide").click(function() 
    {
        if ($(this).data('val') == "1") 
        {
            $("#password").prop('type','text');
            $("#eye").attr("class","glyphicon glyphicon-eye-close");
            $(this).data('val','0');
        }
        else
        {
            $("#password").prop('type', 'password');
            $("#eye").attr("class","glyphicon glyphicon-eye-open");
            $(this).data('val','1');
        }
    });

</script>
@stop