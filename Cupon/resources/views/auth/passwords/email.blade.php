@extends('Body')
@section('titulo', 'Recuperar Contraseña')
@section('content')
<!-- //***Breadcrumb-section Start***// -->
<div class="breadcrumb-section">
    <div class="breadcrumb-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-text padTB50">
                        <h3><span>Recuperar Contraseña, o <a class="parpadea" href="{{URL('/login')}}">Iniciar Sesión</a></span></h3>
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
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form class="form-horizontal" method="POST" id="FormRecuperar" action="{{ route('password.email') }}">
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
                
                <div class="form-group marT20">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                        Enviar Link de Restablecimiento de Contraseña
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
<script src="{{ asset('js/FormRecuperar.js')}}" type="text/javascript"></script>
@stop