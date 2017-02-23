@extends ('main')
@section ('content')

<h5>Registro de Productos</h5>
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Nombre del Producto</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--4-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">Descripción</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--4-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">Unidad</label>
		  </div>
		</form>
	</div>



@stop