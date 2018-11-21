@extends('Body')

@section('titulo', 'Cambiar Contraseña')

@section('content')
<!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span class="parpadea">Cambiar Contraseña</span></h3>
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
                    <form class="form-horizontal" method="POST" action="{{ route('Contrasena') }}" id="FormRegister">
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


                        <div class="form-group {{ $errors->has('password_actual') ? ' has-error' : '' }}">
                            <label class="bold">Contraseña Actual</label>
                            <div class="text-center"><input type="password" class="form-control input-registro" id="password_actual" name="password_actual" required="" value="" autofocus>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="bold">Contraseña Nueva</label>
                            <div class="text-center"><input type="password" class="form-control input-registro" id="password" name="password" required="" value="" autofocus>
                            </div>
                        </div>
                        

                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="bold">Contraseña Nueva Confirmación</label>
                            <div class="text-center"><input type="password" class="form-control input-registro" id="password_confirmation" name="password_confirmation" required="" value="" autofocus>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Actualizar Contraseña
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