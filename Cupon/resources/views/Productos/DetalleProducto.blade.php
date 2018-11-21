<div class="row">
	<div class="col-md-3 text-center">
		<?php @$url=\App\Producto::ImagenUno($Producto->id); ?>
		<img src="{{URL('public/img/productos/'.$url)}}" class="img-circle" style="height: 100px;">
	</div>
	<div class="col-md-9">
		<span class="bold"><h3>{{$Producto->producto_titulo}}</h3></span><br>
		<span class="bold">{{$Producto->DatosCategoria->conf_cat_nombre}}</span> / 
		<span class="bold">{{$Producto->DatosSubCategoria->conf_subcat_nombre}}</span> <br>
		<span><button data-toggle="collapse" data-target="#precios" type="button" class="btn btn-sm btn-info">Ver Precios</button></span>
	</div>
	<div class="col-md-12">
		<div id="precios" class="collapse">
			<table class="table">
		    <thead>
		      <tr>
		        <th>Titulo</th>
		        <th>Precio</th>
		        <th>Descuento%</th>
		        <th>Precio con Descuento</th>
		      </tr>
		    </thead>
		    <tbody>
			@foreach ($Producto->Precios as $precios)
			<tr>
		        <td>{{$precios->productop_titulo}} 
					@if ($precios->productop_oferta == 1) 
					{{$precios->DatosProducto->producto_titulo}} 
						<label class="label label-info label-sm">Es Una Oferta</label>
					@endif
				</td>
		        <td>{{formato_cantidad_normal($precios->productop_total)}}</td>
		        <td>{{$precios->productop_descuento}}</td>
		        <td>{{formato_cantidad_normal($precios->productop_total_descuento)}}</td>
		     </tr>
			@endforeach
		    </tbody>
		  </table>
		</div>
	</div>
</div>