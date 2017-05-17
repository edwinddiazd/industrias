@extends ('main')

@section ('content')

<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--10-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--10-col">
			<div><h4>Compradores Internacionales</h4></div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp class-tabla">
  				<thead>
				    <tr>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Nombre</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Pasaporte</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Direcci&oacute;n</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Sitio Web</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Tel&eacute;fono M&oacute;vil</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Tel&eacute;fono Fijo</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Industria</h6></th>
				    </tr>
  				</thead>
  				<tbody>
  				@foreach ($industrias as $industria)
					    
						    <tr>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $industria->nombre}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $industria->pasaporte}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $industria->direccion}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$industria->web}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$industria->tlf1}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$industria->tlf2}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$industria->industria}}</td>							
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