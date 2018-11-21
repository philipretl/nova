@extends('Secciones.Master')
@section('titulo', config('app.name').' - Información Útil')
@section('titulo_seccion', 'Información Útil')
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
									<header>Información Útil en General</header>
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
												<th class="sorting"> Titulo <sub>Categoría</sub> </th>
												<th class="sorting"> SI <i class="fa fa-smile-o"></i> </th>
												<th class="sorting"> NO <i class="fa fa-frown-o"></i> </th>
											</tr>
										</thead>
										<tbody>
										@foreach ($ListaAyudasTodo as $lista_ayudas)
										<?php $id_crypt = Crypt::encrypt($lista_ayudas->id); ?>
											<tr class="odd gradeX Ayuda{{$lista_ayudas->id}}">
												<td>{{$lista_ayudas->DatosAyuda->ayudas_titulo}}<br>
													<sub>{{$lista_ayudas->DatosAyuda->DatosCategoriaAyuda->ayudas_cat_nombre}}</sub>
												</td>
												<td>
													{{App\AyudaDetalle::CantidadSI($lista_ayudas->ayudas_id)}}
												</td>
												<td>
													{{App\AyudaDetalle::CantidadNO($lista_ayudas->ayudas_id)}}
												</td>
											</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card card-topline-red">
								<div class="card-head">
									<header>Detalle de Información Útil</header>
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
												<th class="sorting"> Titulo <sub>Categoría</sub> </th>
												<th class="sorting"> Usuario </th>
												<th class="sorting"> IP </th>
												<th class="sorting"> Respuesta </th>
											</tr>
										</thead>
										<tbody>
										@foreach ($ListaAyudas as $lista_ayudas)
										<?php $id_crypt = Crypt::encrypt($lista_ayudas->id); ?>
											<tr class="odd gradeX Ayuda{{$lista_ayudas->id}}">
												<td>{{$lista_ayudas->DatosAyuda->ayudas_titulo}}<br>
													<sub>{{$lista_ayudas->DatosAyuda->DatosCategoriaAyuda->ayudas_cat_nombre}}</sub>
												</td>
												<td>
													@if ($lista_ayudas->ayudas_users_id>0)
														{{$lista_ayudas->DatosUsuario->email}}
													@else
														Invitado
													@endif
												</td>
												<td>{{$lista_ayudas->ayudas_ip}}</td>
												<td>
													@if ($lista_ayudas->ayudas_detalles_util>0)
														Si
													@else
														No
													@endif
												</td>
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
