@extends('Secciones.Master')
@section('titulo', config('app.name').' - Listar Créditos')
@section('titulo_seccion', 'Listar Créditos')
@section('content')
<div class="row">	
	<div class="col-md-12">
		<div class="tabbable-line">
			<div class="tab-content">
				<div class="tab-pane active fontawesome-demo" id="tab1">
					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-red">
								<div class="card-head">
								<header></header>
								<div class="tools">
									<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
								</div>
							</div>
							<div class="card-body ">
								<table class="table table-striped table-bordered table-hover order-column valign-middle tabla-consulta">
									<thead>
										<tr>
											<th class="sorting"> Cliente </th>
											<th class="sorting"> Saldo </th>
											<th class="sorting"> Fecha </th>
											<th class="sorting"> Tipo </th>
											<th class="sorting"> Descripción </th>
										</tr>
									</thead>
									<tbody>
										@foreach ($ListarCreditos as $lista_creditos)
										<tr class="odd gradeX Creditos{{$lista_creditos->id}}">
											<td>{{$lista_creditos->DatosUsuario->users_nombre}} {{$lista_creditos->DatosUsuario->users_apellido}} <br> {{$lista_creditos->DatosUsuario->email}} </td>
											<td>{{formato_cantidad_normal($lista_creditos->credito_saldo)}}</td>
											<td>{{FormatDate_YMD_DMY_Completa($lista_creditos->credito_fecha)}}</td>
											<td>
												@if ($lista_creditos->credito_tipo == 1) 
													Balance Añadido 
												@else 
													Balance Quitado 
												@endif</td>
											<td>{{$lista_creditos->credito_descripcion}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@stop