@extends ('main')

@section ('title','|Consulta Personal')

@section ('content')

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--10-col mdl-shadow--3dp mdl-color--grey-100">
		<div class="mdl-grid" style="margin-left: 5%;">
			<div class="mdl-cell mdl-cell--1-col mdl-cell--10-col">
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  				<thead>
				    <tr>
				      <th class="mdl-data-table__cell--non-numeric">Cargo</th>
				      <th class="mdl-data-table__cell--non-numeric">Nombre</th>
				      <th class="mdl-data-table__cell--non-numeric">Correo</th>
				      <th class="mdl-data-table__cell--non-numeric">Tel&eacute;fono</th>
				      <th class="mdl-data-table__cell--non-numeric">Tel&eacute;fono</th>
				      <th class="mdl-data-table__cell--non-numeric">Industrias</th>
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
		</div>
	</div>
</div>

@stop