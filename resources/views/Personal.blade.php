@extends ('main')
@section ('content')

<h5>Datos de la Industria<br></h5>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">INDUSTRIA</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--8-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <textarea class="mdl-textfield__input" type="text" rows= "1" id="sample5" ></textarea>
		    <label class="mdl-textfield__label" for="sample5">Dirección</label>
		  </div>
		</form>
	</div>
</div>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    <label class="mdl-textfield__label" for="sample2">TELEFONO N°1	</label>
		    <span class="mdl-textfield__error">Input is not a number!</span>
		  </div>
		</form>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    <label class="mdl-textfield__label" for="sample2">TELEFONO N°2</label>
		    <span class="mdl-textfield__error">Input is not a number!</span>
		  </div>
		</form>
	</div>
</div>


<!--FORMULARIO PARA EL PRESIDENTE-->
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">PRESIDENTE</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">NOMBRE</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">APELLIDO</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    <label class="mdl-textfield__label" for="sample2">CEDULA</label>
		    <span class="mdl-textfield__error">Input is not a number!</span>
		  </div>
		</form>
	</div>
</div>


<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--6-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">CORREO INSTITUCIONAL</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    <label class="mdl-textfield__label" for="sample2">TELEFONO N° 1</label>
		    <span class="mdl-textfield__error">Input is not a number!</span>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    <label class="mdl-textfield__label" for="sample2">TELEFONO N°2</label>
		    <span class="mdl-textfield__error">Input is not a number!</span>
		  </div>
		</form>
	</div>
</div>

<!--DATOS DEL PERSONAL-->

<H5>Datos del Personal</H5>
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <select style="margin-left: -16px; border-color: blue;">
		    	<option>Selecciones el cargo</option>
		    	<option>Encargado Ventas</option>
		    	<option>Encargado Compras</option>
		    	<option>Encargado Juridico</option>
		    	<option>Encargado Operaciones</option>
		    	<option>Encargado Seguridad Integral</option>
		    	<option>Encargado Seguridad Industrial</option>
		    	<option>Encargado Bienes</option>
		    	<option>Encargado Gestión Humana</option>
		    	<option>Encargado Tecnología</option>
		    	<option>Encargado Comunicaciones</option>
		    </select>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">NOMBRE</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">APELLIDO</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    <label class="mdl-textfield__label" for="sample2">CEDULA</label>
		    <span class="mdl-textfield__error">Input is not a number!</span>
		  </div>
		</form>
	</div>
</div>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--6-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Correo Institucional</label>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    <label class="mdl-textfield__label" for="sample2">TELEFONO N° 1</label>
		    <span class="mdl-textfield__error">Input is not a number!</span>
		  </div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
		    <label class="mdl-textfield__label" for="sample2">TELEFONO N°2</label>
		    <span class="mdl-textfield__error">Input is not a number!</span>
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