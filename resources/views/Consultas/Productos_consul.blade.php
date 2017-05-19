@extends ('main')
@section ('content')

<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--12-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--12-col">
			<div><h4>Consulta Productos</h4></div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp class-tabla">
  				<thead>
				    <tr>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Producto</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Tipo de Producto</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Descripci&oacute;n</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Proyecci&oacute;n</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Unidad de Medida</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Industrias</h6></th>
				    </tr>
  				</thead>
  				<tbody>
  				@foreach ($nuev as $nueva)
					@if($nueva->industrias_id > 3)   
						    <tr>
					    	
					    	<td class="mdl-data-table__cell--non-numeric ">{{ $nueva->producto}}</td>
					    	<td class="mdl-data-table__cell--non-numeric ">{{ $nueva->tipo_producto}}</td>
					    	<td class="mdl-data-table__cell--non-numeric class-tabla">{{ $nueva->descripcion_producto}}</td>
					    	<td class="mdl-data-table__cell--non-numeric ">{{ $nueva->proyeccion}}</td>	
					    	<td class="mdl-data-table__cell--non-numeric">{{$nueva->unidad_producto}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$nueva->industria}}</td>					
				    		</tr>
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