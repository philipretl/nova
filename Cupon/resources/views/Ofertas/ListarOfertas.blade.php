@extends('Secciones.Master')
@section('titulo', config('app.name').' - Listar Ofertas')
@section('titulo_seccion', 'Listar Ofertas')
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
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="btn-group">
											<a href="{{URL('CrearOfertas')}}" class="btn btn-info">
												Agregar Nuevo <i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
								 @if (session('mensaje'))
                                        <div class="alert alert-{{ session('tipo') }} alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ session('mensaje') }}
                                        </div>
                                    @endif
                                    
								<table class="table table-striped table-bordered table-hover order-column valign-middle tabla-consulta">
									<thead>
										<tr>
											<th class="sorting"> Nombre </th>
											<th class="sorting"> Imagen </th>
											<th class="sorting"> Fecha Inicio y Fin de Oferta </th>
											<th class="sorting"> Cantidad </th>
											<th class="sorting"> Total Pagar </th>
											<th class="sorting"> Estatus </th>
											<th class="sorting"> Opciones </th>
										</tr>
									</thead>
									<tbody>
									@foreach ($ListaOfertas as $lista_ofertas)
									<?php 
									if ($lista_ofertas->productop_fecha_fin>fecha_guion()){
										$lista_ofertas->delete();
									}else{?>
									<?php $id_crypt = Crypt::encrypt($lista_ofertas->id); ?>
										<tr class="odd gradeX Oferta{{$lista_ofertas->id}}">
											<td>{{$lista_ofertas->DatosProducto->producto_titulo}}</td>
											<td>
												<?php @$url=\App\Producto::ImagenUno($lista_ofertas->DatosProducto->id); ?>
												<img src="{{URL('public/img/productos/'.$url)}}" height="40px">
											</td>
											<td>{{FormatDate_YMD_DMY($lista_ofertas->productop_fecha_inicio)}} a {{FormatDate_YMD_DMY($lista_ofertas->productop_fecha_fin)}}</td>
											<td>{{$lista_ofertas->productop_cantidad}}</td>
											<td>{{formato_cantidad_normal($lista_ofertas->productop_total_descuento)}}</td>
											<td>
												@if ($lista_ofertas->productop_estatus == 1)
												<label class="badge badge-success Activa{{$lista_ofertas->id}}">Oferta Activa</label>
												<label class="badge badge-danger Eliminada{{$lista_ofertas->id}} hide">Oferta Eliminada</label>
												@elseif ($lista_ofertas->productop_estatus == 2)
												<label class="badge badge-warning Activa{{$lista_ofertas->id}}">Oferta Vencida</label>
												<label class="badge badge-danger Eliminada{{$lista_ofertas->id}} hide">Oferta Eliminada</label>
												@elseif ($lista_ofertas->productop_estatus == 0)
												<label class="badge badge-danger">Oferta Eliminada</label>
												@endif
												@if ($lista_ofertas->productop_slider == 1 && $lista_ofertas->productop_estatus != 0)<br>
												<label class="badge badge-info Activa{{$lista_ofertas->id}}">Activo en Slider</label>
												@endif
											</td>
											<td>
												@if ($lista_ofertas->productop_estatus != 0)
												<a href="{{route('MostrarOferta', ['id' => $id_crypt])}}" title="Editar Registro" data-toggle="tooltip" class="btn btn-primary btn-xs EditarOferta{{$lista_ofertas->id}}">
												<i class="fa fa-pencil"></i>
												</a>
												<a href="javascript:void(0)" title="Eliminar Oferta" onclick="Eliminar('{{$id_crypt}}','{{$lista_ofertas->id}}')" data-toggle="tooltip" class="btn btn-danger btn-xs EliminarOferta{{$lista_ofertas->id}}">
												<i class="fa fa-trash"></i>
												</a>
												@endif
											</td>
										</tr>
									<?php } ?>
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
            var URL = "{!! (url('CambiarEstatus')) !!}";
	        $.ajax({
	            url: URL,
	            type: 'POST',
	            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	            data:{tabla:'ofertas', campo:'producto_precios', id:id_crypt, estatus:'0',_token: $('meta[name=csrf-token]').attr('content')},
	            success: function(data) {
	            	$(".EditarOferta"+id).remove();
	            	$(".EliminarOferta"+id).remove();
	            	$(".Activa"+id).addClass('hide');
	            	$(".Eliminada"+id).removeClass('hide');
	            }
	        });
          } else {
            return true;
          }
      });
    }

</script>
@stop