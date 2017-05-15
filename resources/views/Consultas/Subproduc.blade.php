@extends ('main')
@section ('content')

<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--10-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--11-col">
			<div><h4>Consulta Sub Productos</h4></div>
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
  				@foreach ($sub as $subp)
					    
					<tr>
					<td class="mdl-data-table__cell--non-numeric ">{{ $subp->producto}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $subp->proyeccion}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $subp->capacidad}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $subp->produccion}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{$subp->unidad_producto}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $subp->bolivares}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{ $subp->dolares}}</td>
					<td class="mdl-data-table__cell--non-numeric">{{$subp->industria}}</td>							
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
