@extends('Secciones.Master')
@section('titulo', config('app.name').' - Listar Aliados')
@section('titulo_seccion', 'Listar Aliados')
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

                                    @if (session('mensaje'))
                                        <div class="alert alert-{{ session('tipo') }} alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ session('mensaje') }}
                                        </div>
                                    @endif
                                    
								<table class="table table-striped table-bordered table-hover order-column valign-middle tabla-consulta">
									<thead>
										<tr>
											<th class="sorting"> Nombre o Razón Social </th>
											<th class="sorting"> NIT </th>
											<th class="sorting"> Email </th>
											<th class="sorting"> Teléfonos </th>
											<th class="sorting"> Ofrece </th>
											<th class="sorting"> Opciones </th>
										</tr>
									</thead>
									<tbody>
									@foreach ($ListarAliados as $lista_aliados)
									<?php $id_crypt = Crypt::encrypt($lista_aliados->id); ?>
										<tr class="odd gradeX Aliado{{$lista_aliados->id}}">
											<td>
												@if ($lista_aliados->aliado_tipo==1)
												{{$lista_aliados->aliado_nombres}} {{$lista_aliados->aliado_apellidos}}
												@else
												{{$lista_aliados->aliado_razon_social}}
												@endif

											</td>
											<td>{{$lista_aliados->aliado_nit}}</td>
											<td><a href="mailto:{{$lista_aliados->aliado_nit}}">
											{{$lista_aliados->aliado_email}} </a></td>
											<td>
												<a href="tel:{{$lista_aliados->aliado_telefono_fijo}}">
												{{$lista_aliados->aliado_telefono_fijo}} </a> <br>
												<a href="mailto:{{$lista_aliados->aliado_telefono_celular}}">
											{{$lista_aliados->aliado_telefono_celular}} </a>
											</td>
											<td>{{$lista_aliados->aliado_ofrece}}</td>
											<td>
												<a href="{{route('MostrarAliado', ['id' => $id_crypt])}}" title="Editar Registro" data-toggle="tooltip" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
												</a>


												<button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Eliminar Aliado" onclick="Eliminar('{{$id_crypt}}',{{$lista_aliados->id}})">
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
            var URL = "{!! (url('EliminarAliado')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id_crypt,_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {
                  table.row('tr.Aliado'+id).remove().draw( false );
                }
            });
          } else {
            return true;
          }
      });
    }

</script>
@stop