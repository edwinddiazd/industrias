@extends('main')
@section('content')
<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--12-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--12-col">
			<div><h4>Consulta  Tipo de Producto por Industria</h4></div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <select style="border-color: blue;" name="tipo_producto">
					<option >Seleccione Tipo de Producción</option>
					<option value="Semi-Terminado">Semi - Terminado</option>
					<option value="Terminado">Terminado</option>
					<option value="Sub Producto">Sub Producto</option>
			    </select>
			</div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
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
  				
  				@foreach ($proy as $pro)
					    
						    <tr>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $pro->producto}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $pro->tipo_producto}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $pro->descripcion_producto}}</td>	
					    	<td class="mdl-data-table__cell--non-numeric">{{$pro->proyeccion}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$pro->unidad_producto}}</td>
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