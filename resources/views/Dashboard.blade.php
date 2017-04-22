@extends ('main')

@section ('content')

<!--dashboard de el usuario Dios
=================================--> 
@if(Entrust::hasRole('Dios'))
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--10-col mdl-shadow--3dp mdl-color--grey-100">
	<h5 style="margin-left: 2%;">{{ $industrias->industria }}<br></h5>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					<div>{{$industrias->direccion_industria}}</div>
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<div>{{$industrias->rif_industria}}</div>
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<div>{{$industrias->tipo_industria}}</div>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Industria">
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Producto">
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Proyecci&oacute;n">
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Exportaci&oacute;n">
				</div>
			</div>
	</div>
	<div class="mdl-layout-spacer"></div>
</div>
<!--dashboard de el usuario Visor
=====================================--> 
@elseif (Entrust::hasRole('Consulta'))
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--10-col mdl-shadow--3dp mdl-color--grey-100">
	<h5 style="margin-left: 2%;">Nombre de la Industria<br></h5>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					<div style="border: 2px solid #ccc">Direcci&oacute;n</div>
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<div style="border: 2px solid #ccc">RIF</div>
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<div style="border: 2px solid #ccc">Tipo de Industria</div>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Industria">
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Producto">
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Materia Prima">
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Proyecci&oacute;n">
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Exportaci&oacute;n">
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Operaci&oacute;n">
				</div>
			</div>
	</div>
	<div class="mdl-layout-spacer"></div>

</div>

<!--dashboard de el usuario Registro
=======================================--> 

@elseif (Entrust::hasRole('Mortal'))
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--10-col mdl-shadow--3dp mdl-color--grey-100">
	<h5 style="margin-left: 2%;">Nombre de la Industria<br></h5>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					<div style="border: 2px solid #ccc">Direcci&oacute;n</div>
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<div style="border: 2px solid #ccc">RIF</div>
				</div>
				<div class="mdl-cell mdl-cell--4-col">
					<div style="border: 2px solid #ccc">Tipo de Industria</div>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Producto">
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Materia Prima">
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Proyecci&oacute;n">
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Exportaci&oacute;n">
				</div>
			</div>
	</div>
	<div class="mdl-layout-spacer"></div>

</div>
@endif
@endsection
