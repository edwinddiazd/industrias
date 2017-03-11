@extends ('main')

@section ('title','|Consulta Bienes')

@section ('content')

<div class="mdl-grid">
<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--10-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
			<div class="mdl-cell mdl-cell--1-col mdl-cell--10-col">
			<div><h4>Datos Personal</h4></div>
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  				<thead>
				    <tr>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Cargo</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Nombre</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Correo</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Tel&eacute;fono</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Tel&eacute;fono</h6></th>
				      <th class="mdl-data-table__cell--non-numeric"><h6 style="font-weight: bold;">Industrias</h6></th>
				    </tr>
  				</thead>
  				<tbody>
  				@foreach ($industrias as $industria)
					    
						    <tr>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $industria->cargo_personal }}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{ $industria->nombre_personal}} {{ $industria->apellido_personal }}</td>	
					    	<td class="mdl-data-table__cell--non-numeric">{{$industria->email_personal}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$industria->telefono1_personal}}</td>
					    	<td class="mdl-data-table__cell--non-numeric">{{$industria->telefono2_personal}}</td>
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