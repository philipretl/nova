@extends('Secciones.Master')
@section('titulo', config('app.name').' - Listar Marcas')
@section('titulo_seccion', 'Listar Marcas')
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
											<a href="{{URL('CrearMarcas')}}" class="btn btn-info">
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
											<th class="sorting"> Tiempo de Publicación </th>
											<th class="sorting"> Estatus </th>
											<th class="sorting"> Imagen </th>
											<th class="sorting"> Opciones </th>
										</tr>
									</thead>
									<tbody>
									@foreach ($ListaMarcas as $lista_marcas)
									<?php $id_crypt = Crypt::encrypt($lista_marcas->id); ?>
										<tr class="odd gradeX Marca{{$lista_marcas->id}}">
											<td>{{$lista_marcas->marca_nombre}}</td>
											<td>{{FormatDate_YMD_DMY($lista_marcas->marca_fecha_inicio)}} a {{FormatDate_YMD_DMY($lista_marcas->marca_fecha_fin)}}</td>
											<td class="left">
												<label class="switchToggle">
													<input type="checkbox" onclick="Estatus('{{$id_crypt}}','{{$lista_marcas->id}}')" @if ($lista_marcas->marca_estatus==1) checked @endif class="Estatus-{{$lista_marcas->id}}">
													<span class="slider red"></span>
												</label>
											</td>
											<td>
												<img src="{{URL('public/img/marcas/'.$lista_marcas->marca_imagen)}}" height="40px">
											</td>
											<td>
												<a href="{{route('MostrarMarca', ['id' => $id_crypt])}}" title="Editar Registro" data-toggle="tooltip" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
												</a>

												<button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Eliminar Marca" onclick="Eliminar('{{$id_crypt}}',{{$lista_marcas->id}})">
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

	function Estatus(id_crypt,id)
    {	
    	if ($('.Estatus-'+id).prop('checked')) {var estatus = 1;}else{var estatus = 0;}

        var URL = "{!! (url('CambiarEstatus')) !!}";
        $.ajax({
            url: URL,
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{tabla:'marcas', campo:'marca_estatus', id:id_crypt, estatus:estatus,_token: $('meta[name=csrf-token]').attr('content')},
            success: function(data) {}
        });
    }

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
            var URL = "{!! (url('EliminarMarca')) !!}";
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