@extends('Body')

@section('titulo', 'Iniciar Sesión')

@section('content')
<!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span>Iniciar Sesión o  <a href="{{URL('/CrearCityCuenta')}}">Crear City Cuenta</a></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->

    <div class="row">
        <div class="col-md-4 col-md-offset-4 marT50 marB50">

                <div class="panel-body form-login">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}" id="FormLogin">
                        {{ csrf_field() }}
                        @if ($errors->has('email'))
                            <div class="alert alert-danger alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="bold">Email</label>
                            <div class="text-center"><input type="text" class="form-control input-lg input-registro" id="email" name="email" required="" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="controls row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="bold">Contraseña</label></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                                    <a href="{{URL('/password/reset')}}" id="olvido_contrasena">¿Olvidaste tu contraseña? </a>
                                </div>
                            </div>
                            <div class="controls">
                                <div class="input-group">
                                  <input type="password" id="password" class="form-control input-lg input-registro" name="password">
                                  <span class="input-group-btn">
                                     <button class="btn btn-default btn-md" type="button" id="showhide" data-val='1'><span id='eye' class="glyphicon glyphicon-eye-open"></span></button>
                                  </span>
                               </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Iniciar Sesión
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

<script src="{{ asset('js/FormLogin.js')}}" type="text/javascript"></script>

<script type="text/javascript">
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