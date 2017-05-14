@extends('main')
@section('content')
<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--12-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--12-col">
			<div><h4>Consulta  Tipo de Producto por Industria "Sub Producto"</h4></div>
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
  				
  				@foreach ($proys as $proy)
				@if ( $proy->tipo_producto === 'Sub-Producto' )
			    
			    <tr>
		    	<td class="mdl-data-table__cell--non-numeric">{{$proy->producto}}</td>
		    	<td class="mdl-data-table__cell--non-numeric">{{$proy->proyeccion}}</td>
		    	<td class="mdl-data-table__cell--non-numeric">{{$proy->capacidad}}</td>	
		    	<td class="mdl-data-table__cell--non-numeric">{{$proy->tipo_producto}}</td>
		    	<td class="mdl-data-table__cell--non-numeric">{{$proy->unidad_producto}}</td>
		    	<td class="mdl-data-table__cell--non-numeric">{{$proy->bolivares}}</td>
		    	<td class="mdl-data-table__cell--non-numeric">{{$proy->dolares}}</td>
		    	<td class="mdl-data-table__cell--non-numeric">{{$proy->industria}}</td>							
	    		</tr>
	    		@else
				@endif		
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