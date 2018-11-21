@extends('BodyAyuda')
@section('titulo', 'Ayuda')
@section('content')
<!-- //***Breadcrumb-section Start***// -->
<div class="breadcrumb-section">
    <div class="breadcrumb-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-text padTB50">
                        <h3 style="font-size:35px;" class="parpadea"><span>CityAyuda</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //***Breadcrumb-Section End***// -->

<!-- //***coupons-details Start***// -->
<div class="deals bg padTB40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="blog marB30">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-justify marB30">
                                <p><h4>
                                    Tienes dudas o inquietudes sobre tu compra? Aquí las despejamos! Ingresa a la pregunta que desees resolver, si no es suficiente, por favor diligencia todos los campos del <a href="{{URL('PonteEnContacto/0/0')}}" class="bold text-green">formulario “ponte en contacto”</a> y cuanto antes daremos solución a tu caso.!
                                    </h4>
                                </p>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row aligned-row">
                            @foreach($Ayuda as $ayudacat)
                            <div class="col-md-4 col-sm-4 col-xs-12" style="font-size:16px !important;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title bold">
                                            <img src="{{URL('public/img/ayuda/'.$ayudacat->ayudas_cat_imagen)}}" style="height: 30px;">
                                            {{$ayudacat->ayudas_cat_nombre}}</h3>
                                    </div>
                                    <div class="panel-body">
                                        @foreach($ayudacat->TodasAyudas() as $infoAyudas)
                                        <div class="panel-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" href="#collapse{{$infoAyudas->id}}" style="font-size: 16px;">
                                                        {{$infoAyudas->ayudas_titulo}}
                                                    </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse{{$infoAyudas->id}}" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        {!! $infoAyudas->ayudas_descripcion !!} <br>
                                        <div class="text-center">
                                            <span class="bold"> Fue Útil la información entregada </span><br>
                                            <div class="btn-group">
                                              <button type="button" class="btn cuponbutton SiUtil"  data-id="{{$infoAyudas->id}}" data-href="{{URL('PonteEnContacto/'.$infoAyudas->ayudas_cat_id.'/'.$infoAyudas->id)}}"><i class="fa fa-smile-o"></i> Si</button>
                                              <button type="button" class="btn cuponbutton NoUtil"  data-id="{{$infoAyudas->id}}" data-href="{{URL('PonteEnContacto/'.$infoAyudas->ayudas_cat_id.'/'.$infoAyudas->id)}}"><i class="fa fa-frown-o"></i> No</button>
                                            </div><br>
                                            <span  class="bold"> Necesitas Más Ayuda </span><br>
                                            <a href="{{URL('PonteEnContacto/'.$infoAyudas->ayudas_cat_id.'/'.$infoAyudas->id)}}" class="btn btn-success text-white"><i class="fa fa-question"></i> Ponte en Contacto</a>

                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- //***coupons-details End***// -->
@stop

@section('script')
<script type="text/javascript">
    $(".SiUtil").on('click',function(){
      var id = $(this).data("id");
      var opcion = 1;
      var URL = "{!! (url('AyudaDetalle')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id,opcion:opcion,_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {}
            });

    });

    $(".NoUtil").on('click',function(){
      var id = $(this).data("id");
      var href = $(this).data("href");
      var opcion = 0;
      var URL = "{!! (url('AyudaDetalle')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id,opcion:opcion,_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {
                    swal({
                        title: "Necesitas ayuda, Deses comunicarte con nosotros?",
                        text: "",
                        type: "info",
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Si',
                        cancelButtonText: "No",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            window.location.href = href;
                        } else {
                            return true;
                        }
                    });

                }
            });

    });
</script>
@stop