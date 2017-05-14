@extends('main')
@section('content')
<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--12-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--12-col">
			<div><h4>Consulta Tipo de Producto por Industria "Semi Terminado"</h4></div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  				<thead>
				    <tr>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Producto</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Proyecci&oacute;n</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Capacidad Operativa</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Producci&oacute;n</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Unidad de Medida</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Precio BS</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Precio $</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Industrias</h6></th>
				    </tr>
  				</thead>
  				<tbody>
  				
  				@foreach ($proy as $pro)
					    
						    <tr>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $pro->producto}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $pro->proyeccion}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $pro->capacidad}}</td>	
					    	<td class="mdl-data-table__cell--non-numeric">{{$pro->produccion}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$pro->unidad_producto}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$pro->bolivares}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$pro->dolares}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$pro->industria}}</td>							
				    		</tr>
				    		
				@endforeach
				    
  				</tbody>
			</table>
			</div>
			<div class="mdl-layout-spacer"></div>
		</div>
	</div>
	<div class="mdl-layout-spacer"></div>
</div>

@stop