@extends ('main')
@section ('content')

<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--12-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--12-col">
			<div><h4>Consulta Materias Primas</h4></div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp class-tabla">
  				<thead>
				    <tr>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Nombre</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Descripci&oacute;n</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Unidad de Medida</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Industrias</h6></th>
				    </tr>
  				</thead>
  				<tbody>
  				@foreach ($smp as $smps)
					    
						    <tr>
					    	<td class="mdl-data-table__cell--non-numeric ">{{ $smps->nombre}}</td>
					    	<td class="mdl-data-table__cell--non-numeric class-tabla">{{ $smps->descripcion}}</td>	
					    	<td class="mdl-data-table__cell--non-numeric">{{$smps->unidad}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$smps->industria}}</td>							
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