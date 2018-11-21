@extends('Secciones.Master')
@section('titulo', config('app.name').' - Listar Productos')
@section('titulo_seccion', 'Listar Productos')
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
											<a href="{{URL('CrearProductos')}}" class="btn btn-info">
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
											<th class="sorting"> Marca</th>
											<th class="sorting"> Palabras Clave </th>
											<th>Vendidas</th>
											<th>Cantidad</th>
											<th class="sorting"> Estado </th>
											<th class="sorting"> Imagen </th>
											<th class="sorting"> Opciones </th>
										</tr>
									</thead>
									<tbody>
									@foreach ($ListaProductos as $lista_productos)
									<?php 
										$id_crypt = Crypt::encrypt($lista_productos->id);
										$tagf="";
										$tags = $lista_productos->producto_palabras_clave;
										if ($lista_productos->producto_palabras_clave != ""){
											foreach(explode(',', $tags) as $tag){
												$tagf.= '<label class="label label-info label-sm" style="margin-bottom:10px;">'.$tag.'</label> &nbsp; ';
											}
										}
										else{
											$tagf = "";
										}

										$tcomprados=0;
                                		$comprados = 0;
										foreach ($lista_productos->Precios as $precios){
											$comprados = App\Compra::CantProductosComprados($precios->id);
                                        $tcomprados = $tcomprados+$comprados;
										}
										//@Philipretl
										$cantf="";
										$cants = $lista_productos->Cantidad;
										if ($lista_productos->Cantidad != ""){
											foreach(explode(',', $cants) as $cant){
												if(strpos($cant,'productop_cantidad')!==false){
													  list($palabra1, $palabra2) = explode(':', $cant);
														$cantf=$palabra2;
												}
											}
										}
										else{
											$cantf = "";
										}


									 ?>
									
										<tr class="odd gradeX Producto{{$lista_productos->id}}">
											<td>{{$lista_productos->producto_titulo}}</td>
											<td>{{$lista_productos->DatosCategoria->conf_cat_nombre}} <sup>{{$lista_productos->DatosSubcategoria->conf_subcat_nombre}}</sup></td>
											<td>
											{{$lista_productos->DatosMarca->marca_nombre}}
											</td>
											<td>{!!$tagf!!}</td>
											<td>{{$tcomprados}}</td>
											<td>{!!$cantf!!}</td>
											

											<td class="left">
												<label class="switchToggle">
													<input type="checkbox" onclick="Estatus('{{$id_crypt}}','{{$lista_productos->id}}')" @if ($lista_productos->producto_estatus==1) checked @endif class="Estatus-{{$lista_productos->id}}">
													<span class="slider red"></span>
												</label>
											</td>
											<td>
												<?php @$url=\App\Producto::ImagenUno($lista_productos->id); ?>
												<img src="{{URL('public/img/productos/'.$url)}}" height="40px">
											</td>
											<td>
												<a href="{{route('MostrarProducto', ['id' => $id_crypt])}}" title="Editar Registro" data-toggle="tooltip" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
												</a>
												<a href="javascript:void(0)" onclick="Eliminar('{{$id_crypt}}','{{$lista_productos->id}}')" class="btn btn-danger btn-xs">
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
            data:{tabla:'productos', campo:'producto_estatus', id:id_crypt, estatus:estatus,_token: $('meta[name=csrf-token]').attr('content')},
            success: function(data) {
            	$.ajax({
		            url: URL,
		            type: 'POST',
		            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		            data:{tabla:'ofertas', campo:'oferta_estatus', id_campo: 'oferta_producto_id', id:id_crypt, estatus:estatus,_token: $('meta[name=csrf-token]').attr('content')},
		            success: function(data) {
		            	
		            }
		        });
            }
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
            var URL = "{!! (url('EliminarProducto')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id_crypt,_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {
                  table.row('tr.Producto'+id).remove().draw( false );
                }
            });
          } else {
            return true;
          }
      });
    }

</script>
@stop