@extends('Body')

@section('titulo', 'Perfil y Suscripciones')

@section('css')
<link href="{{ asset('js/select2/css/select2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('js/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
.btn-yellow{
    color: #000;
    background-color: #ffdb0f;
    border-color: #ffdb0f;
}
</style>
@endsection

@section('content')
<!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3><span class="parpadea">Perfil y Suscripciones</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->

    <div class="row">
        <div class="col-md-4 col-md-offset-2 marT50 marB50 bg-white">

                <div class="panel-body form-login">
                    <form class="form-horizontal" method="POST" action="{{ route('Perfil') }}" id="FormRegister">
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
                            <div class="text-center"><input type="text" class="form-control input-registro" id="users_nombre" name="users_nombre" required="" value="{{Auth::user()->users_nombre}}" autofocus>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('users_apellido') ? ' has-error' : '' }}">
                            <label class="bold">Apellido</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="users_apellido" name="users_apellido" required="" value="{{Auth::user()->users_apellido}}" autofocus>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="bold">Email (Nombre de Usuario)</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="email" name="email" required="" value="{{Auth::user()->email}}" autofocus>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('users_direccion') ? ' has-error' : '' }}">
                            <label class="bold">Dirección</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="users_direccion" name="users_direccion" required="" value="{{Auth::user()->users_direccion}}" autofocus>
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('users_telefono') ? ' has-error' : '' }}">
                            <label class="bold">Teléfono</label>
                            <div class="text-center"><input type="text" class="form-control input-registro" id="users_telefono" name="users_telefono" required="" value="{{Auth::user()->users_telefono}}" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Actualizar Perfil
                                </button>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" method="POST" action="{{ route('CuentaCancelar') }}" id="DarseBajaCuenta">
                        {{ csrf_field() }}

                        <div class="form-group marT20">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-yellow btn-lg DarseBajaCuenta bold">
                                    Darse de Baja de CuponCity
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>

        <div class="col-md-4 col-md-offset-1 marT50 marB50 bg-white">

                <div class="panel-body form-login  marT50">
                    <form class="form-horizontal" method="POST" action="{{ route('Suscripciones') }}" id="FormRegister">
                        {{ csrf_field() }}

                        @if (session('mensaje2'))
                            <div class="alert alert-{{ session('tipo2') }} alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('mensaje2') }}
                            </div>
                            @endif
                        <?php
                        @$Valores = explode(',',$Suscripcion->suscripcion_categorias);
                        ?>
                        <div class="form-group {{ $errors->has('suscripcion_categorias') ? ' has-error' : '' }}">
                            <label class="bold">Seleccione las Categorías de donde quiere recibir boletines y oferas </label>
                            <div class="text-center">
                                <select class="form-control select2-multiple" multiple="" name="suscripcion_categorias[]">
                                @foreach ($CategoriasTodas as $categoriat)
                                    <option @if (in_array($categoriat->id, $Valores)) selected @endif
                                    value="{{$categoriat->id}}">{{$categoriat->conf_cat_nombre}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group marT10">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Actualizar Suscripcion
                                </button>
                            </div>
                        </div>
                    </form>

                    @if (count($Suscripcion)>0)
                    <form class="form-horizontal" method="POST" action="{{ route('SuscripcionesCancelar') }}" id="FormRegister">
                        {{ csrf_field() }}

                        @if (session('mensaje3'))
                            <div class="alert alert-{{ session('tipo3') }} alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('mensaje3') }}
                            </div>
                        @endif

                        <div class="form-group marT50">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-danger btn-lg">
                                    Darse de Baja de Todas las Suscripciones
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
        </div>
    </div>
@endsection

@section('script')
<script src="{{ asset('js/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-validation/js/localization/messages_es.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>


<script src="{{ asset('js/select2/js/select2.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/select2/js/select2_es.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/select2/js/select2-init.js')}}" type="text/javascript"></script>

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

    $(".DarseBajaCuenta").on('click',function(){
        swal({
        title: "Esta Seguro de Darse de baja de CuponCity?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Si',
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
      },
      function(isConfirm) {
          if (isConfirm) {
            $("#DarseBajaCuenta").submit();
          } else {
            return true;
          }
      });
    });

</script>
@stop