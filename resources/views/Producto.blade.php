@extends ('main')
@section ('content')

<h5>Registro de Productos</h5>

<div class="mdl-grid">
	<form method="POST" action="{{route('Productos.store')}}">
		 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <select style="border-color: blue;">
		    	<option >Seleccione Tipo de Producción</option>
		    	<option value="1">Semi - Terminado</option>
		    	<option value="2">Terminado</option>
		    	<option value="3">Sub Producto</option>
		    </select>
		</div>
	</form>
</div>
<div class="mdl-grid" >
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
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">Unidad</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--4-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <textarea class="mdl-textfield__input" type="text" rows= "1" id="sample5" ></textarea>
		    <label class="mdl-textfield__label" for="sample5">Descripción</label>
		  </div>
		</form>
	</div>

</div>

<div class="mdl-grid"
	<div class="mdl-cell mdl-cell--4-col-offset mdl-cell--4-col">
		<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">Agregar</button>
	</div>
</div>


@stop