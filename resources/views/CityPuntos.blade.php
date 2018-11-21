@extends('Body')

@section('titulo', 'CityPuntos')

@section('content')
<!-- //***Breadcrumb-section Start***// -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text padTB50">
                                <h3 style="display: inline;"><span class="parpadea">CityPuntos</span></h3>
                                <h3 style="float:right;display: inline;"><span>Balance: $ <strong>{{formato_cantidad_normal($Balance)}}</strong> </span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->

    <div class="row">
        <div class="col-md-9 col-md-offset-2 marT60 marB60 bg-white text-center">
            @if (count($Creditos)>0)
            <table class="table table-hover text-left">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Fecha</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Creditos as $credito)
                        <tr>
                            <td>{{$credito->credito_descripcion}}</td>
                            <td>@if ($credito->credito_tipo == 1) Balance Añadido @else Balance Quitado @endif </td>
                            <td>{{FormatDate_YMD_DMY_Completa($credito->credito_fecha)}}</td>
                            <td>$ {{formato_cantidad_normal($credito->credito_saldo)}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <h3 class="padT20 padB20"><i class="fa fa-times"></i> &nbsp; Aún no tienes CityPuntos</h3>
            @endif
        </div>
    </div>
@endsection