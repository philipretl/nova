@extends('Secciones.Master')
@section('titulo', config('app.name').' - Listar Ayudas')
@section('titulo_seccion', 'Listar Ayudas')
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
											<a href="{{URL('CrearAyudas')}}" class="btn btn-info">
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
											<th class="sorting"> Titulo </th>
											<th class="sorting"> Categoria </th>
											<th class="sorting"> Estado </th>
											<th class="sorting"> Opciones </th>
										</tr>
									</thead>
									<tbody>
									@foreach ($ListaAyudas as $lista_ayudas)
									<?php $id_crypt = Crypt::encrypt($lista_ayudas->id); ?>
										<tr class="odd gradeX Ayuda{{$lista_ayudas->id}}">
											<td>{{$lista_ayudas->ayudas_titulo}}</td>
											<td>{{$lista_ayudas->DatosCategoriaAyuda->ayudas_cat_nombre}}</td>
											<td class="left">
												<label class="switchToggle">
													<input type="checkbox" onclick="Estatus('{{$id_crypt}}','{{$lista_ayudas->id}}')" @if ($lista_ayudas->ayudas_estatus==1) checked @endif class="Estatus-{{$lista_ayudas->id}}">
													<span class="slider red"></span>
												</label>
											</td>
											<td>
												<a href="{{route('MostrarAyuda', ['id' => $id_crypt])}}" title="Editar Registro" data-toggle="tooltip" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
												</a>
												
												<a href="javascript:void(0)" title="Eliminar Registro" onclick="Eliminar('{{$id_crypt}}','{{$lista_ayudas->id}}')" data-toggle="tooltip" class="btn btn-danger btn-xs">
												<i class="fa fa-trash"></i>
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
            data:{tabla:'ayudas', campo:'ayudas_estatus', id:id_crypt, estatus:estatus,_token: $('meta[name=csrf-token]').attr('content')},
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
            var URL = "{!! (url('EliminarAyuda')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id_crypt,_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {
                  table.row('tr.Ayuda'+id).remove().draw( false );
                }
            });
          } else {
            return true;
          }
      });
    }

</script>
@stop