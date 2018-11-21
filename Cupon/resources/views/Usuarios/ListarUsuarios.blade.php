@extends('Secciones.Master')
@section('titulo', config('app.name').' - Listar Usuarios')
@section('titulo_seccion', 'Listar Usuarios')
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
											<a href="{{URL('CrearUsuarios')}}" class="btn btn-info">
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
											<th class="sorting"> Nombre Completo </th>
											<th class="sorting"> Email </th>
											<th class="sorting"> Teléfono </th>
											<th class="sorting"> Estado </th>
											<th class="sorting"> Accion </th>
										</tr>
									</thead>
									<tbody>
									@foreach ($ListaUsuarios as $lista_usuarios)
									<?php $id_crypt = Crypt::encrypt($lista_usuarios->id); ?>
										<tr class="odd gradeX Usuario{{$lista_usuarios->id}}">
											<td>{{$lista_usuarios->users_nombre}} {{$lista_usuarios->users_apellido}}</td>
											<td><a href="mailto:{{$lista_usuarios->email}}">
											{{$lista_usuarios->email}} </a></td>
											<td><a href="tel:{{$lista_usuarios->users_telefono}}">
											{{$lista_usuarios->users_telefono}} </a></td>
											<td class="left">
												<label class="switchToggle">
													<input type="checkbox" onclick="Estatus('{{$id_crypt}}','{{$lista_usuarios->id}}')" @if ($lista_usuarios->users_estatus==1) checked @endif class="Estatus-{{$lista_usuarios->id}}">
													<span class="slider aqua"></span>
												</label>
											</td>
											<td>
												<a href="{{route('MostrarUsuario', ['id' => $id_crypt])}}" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
												</a>
												<a href="javascript:void(0)" onclick="Eliminar('{{$id_crypt}}','{{$lista_usuarios->id}}')" class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
												</a>
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
            data:{tabla:'users', campo:'users_estatus', id:id_crypt, estatus:estatus,_token: $('meta[name=csrf-token]').attr('content')},
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
            var URL = "{!! (url('EliminarUsuario')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id_crypt,_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {
                  table.row('tr.Usuario'+id).remove().draw( false );
                }
            });
          } else {
            return true;
          }
      });
    }

</script>
@stop