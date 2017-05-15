@extends ('main')
@section ('content')

<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--10-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--11-col">
			<div><h4>Consulta Productos Terminados</h4></div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp class-tabla">
  				<thead>
				    <tr>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Producto</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Proyecci&oacute;n</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Capacidad Operativa</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Producci&oacute;n</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Unidad de Medida</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Precio Bs</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Precios $</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Industrias</h6></th>
				    </tr>
  				</thead>
  				<tbody>
  				@foreach ($ter as $term)
					    
					<tr>
					<td class="mdl-data-table__cell--non-numeric ">{{ $term->producto}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $term->proyeccion}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $term->capacidad}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $term->produccion}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{$term->unidad_producto}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $term->bolivares}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $term->dolares}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{$term->industria}}</td>							
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