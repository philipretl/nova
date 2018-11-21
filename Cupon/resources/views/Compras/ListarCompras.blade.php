@extends('Secciones.Master')
@section('titulo', config('app.name').' - Listar Compras '.$Titulo)
@section('titulo_seccion', 'Listar Compras '.$Titulo)
@section('content')
<div class="row">
	<div class="col-xl-12 col-md-12 col-12">
		<a href="{{URL('ListarCompras/1')}}">
			<button type="button" class="btn @if ($Id==1) btn-success @else btn-primary @endif"  autocomplete="off">
			Compras En el Carrito
			</button>
		</a>
		<a href="{{URL('ListarCompras/2')}}">
			<button type="button" class="btn @if ($Id==2) btn-success @else btn-primary @endif" autocomplete="off">
			Compras Procesadas
			</button>
		</a>

		<a href="{{URL('ListarCompras/3')}}">
			<button type="button" class="btn @if ($Id==3) btn-success @else btn-primary @endif"  autocomplete="off">
			Compras Pagadas
			</button>
		</a>

		<a href="{{URL('ListarCompras/4')}}">
			<button type="button" class="btn @if ($Id==4) btn-success @else btn-primary @endif"  autocomplete="off">
			Compras Devueltas
			</button>
		</a>

		<a href="{{URL('ListarCompras/5')}}">
			<button type="button" class="btn @if ($Id==5) btn-success @else btn-primary @endif"  autocomplete="off">
			Compras Sin Concretar
			</button>
		</a>
	</div>
	
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
											<th class="sorting"> Nombre Producto </th>
											<th class="sorting"> Cliente </th>
											<th class="sorting"> Código Cupón </th>
											<th class="sorting"> Cantidad </th>
											<th class="sorting"> Total Unidad </th>
											<th class="sorting"> Total </th>
											<th class="sorting"> Fecha de Compra </th>
											<th class="sorting"> Estatus </th>
											<th class="sorting"> Opciones </th>
										</tr>
									</thead>
									<tbody>
										@foreach ($ListarCompras as $lista_compras)
										<?php 
										$id_crypt = Crypt::encrypt($lista_compras->id);
										$code_hex = Crypt::encrypt($lista_compras->compra_codigo_hex);
										$code_int = Crypt::encrypt($lista_compras->compra_codigo_entero);
										$ExistePago=App\Credito::DatosCreditoCompraCodigo($lista_compras->compra_codigo_compra);
										 ?>
										<tr class="odd gradeX Marca{{$lista_compras->id}}">
											<td>{{$lista_compras->DatosProductoPrecio->DatosProducto->producto_titulo}} <br>
												@if ($ExistePago!=null)
											<label class="label label-success label-sm"> Existe un Pago de CityPuntos de ${{formato_cantidad_normal($ExistePago->credito_saldo)}}</label>
												@endif

												@if ($lista_compras->compra_oferta==1)
												<label class="label label-info label-sm">Es Oferta, Vence el {{FormatDate_YMD_DMY($lista_compras->compra_oferta_fecha_fin)}}</label>
												@endif
											</td>
											<td>{{$lista_compras->DatosUsuario->users_nombre}} {{$lista_compras->DatosUsuario->users_apellido}} <br> {{$lista_compras->DatosUsuario->email}} </td>
											<td>{{$lista_compras->compra_codigo_entero}}</td>
											<td>{{$lista_compras->compra_cantidad}}</td>
											<td>{{formato_cantidad_normal($lista_compras->compra_total)}}</td>
											<td>{{formato_cantidad_normal($lista_compras->compra_cantidad*$lista_compras->compra_total)}}</td>

											<td>{{FormatDate_YMD_DMY_Completa($lista_compras->created_at)}}</td>
											<td>
												@if ($lista_compras->compra_estatus==1)
												<label class="label label-info label-sm">En El Carrito de Compra</label>
												@endif
												@if ($lista_compras->compra_estatus==2)
												<label class="label label-danger label-sm">Pedido Procesado</label>
												@endif
												@if ($lista_compras->compra_estatus==3)
												<label class="label label-success label-sm">Pedido Pagado</label>
												@endif
												@if ($lista_compras->compra_estatus==4)
												<label class="label label-warning label-sm">Compra Devuelta</label>
												@endif
												@if ($lista_compras->compra_estatus==5)
												<label class="label label-warning label-sm">Compra Sin Concretar</label>
												@endif
											</td>
											<td>
												@if ($lista_compras->compra_estatus==2)
												<button class="btn btn-success btn-xs" data-toggle="tooltip" title="Procesar Compra y Enviar Cupón" onclick="Estatus('{{$id_crypt}}',{{$lista_compras->id}},3)">
												<i class="fa fa-check"></i>
												<i class="fa fa-envelope"></i>
												</button>
												
												@endif

												@if ($lista_compras->compra_estatus==3)

												<button class="btn btn-warning btn-xs" data-toggle="tooltip" title="Hacer Devolución" onclick="Devolucion('{{$id_crypt}}',{{$lista_compras->id}},4)">
												<i class="fa fa-hand-o-left"></i>
												</button>

												<a target="_blank" class="btn btn-success btn-xs" data-toggle="tooltip" title="Imprimir Cupón" href="{{URL('CuponPDF/'.$code_hex.'/'.$code_int)}}">
												<i class="fa fa-print"></i>
												</a>
												@endif

												<button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Eliminar Compra" onclick="Eliminar('{{$id_crypt}}',{{$lista_compras->id}})">
												<i class="fa fa-trash"></i>
												</button>
												
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
@section('script')
<script type="text/javascript">
var table = $('.tabla-consulta').DataTable();

function Estatus(id_crypt,id,estatus)
	{
	swal({
	title: "Esta Seguro de Procesar la Compra como Pagada?",
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
		var URL = "{!! (url('CambiarEstatus')) !!}";
		$.ajax({
		url: URL,
		type: 'POST',
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		data:{tabla:'compras', campo:'compra_estatus', id:id_crypt, estatus:estatus,_token: $('meta[name=csrf-token]').attr('content')},
		success: function(data) {
			table.row('tr.Marca'+id).remove().draw( false );
			}
		});

		if (estatus==3){

			var URL = "{!! (url('EmailProcesarCompra')) !!}";
			$.ajax({
				url: URL,
				type: 'POST',
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data:{id:id_crypt,_token: $('meta[name=csrf-token]').attr('content')},
				success: function(data) {

				}
			});

		}
	} else {
	return true;
	}
		});
}

function Eliminar(id_crypt,id) {
	swal({
		title: "Esta Seguro de Eliminar Este Registro?",
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
		var URL = "{!! (url('EliminarCompra')) !!}";
			$.ajax({
				url: URL,
				type: 'POST',
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data:{id:id_crypt,_token: $('meta[name=csrf-token]').attr('content')},
				success: function(data) {
					table.row('tr.Marca'+id).remove().draw( false );
				}
			});
		} else {
			return true;
		}
	});
}

function Devolucion(id_crypt,id) {
	swal({
		title: "Esta Seguro de Realiza una Devolución?",
		text: "No podrá deshacer",
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
		var URL = "{!! (url('DevolucionCompra')) !!}";
			$.ajax({
				url: URL,
				type: 'POST',
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data:{id:id_crypt,_token: $('meta[name=csrf-token]').attr('content')},
				success: function(data) {
					table.row('tr.Marca'+id).remove().draw( false );
				}
			});
		} else {
			return true;
		}
	});
}

</script>
@stop