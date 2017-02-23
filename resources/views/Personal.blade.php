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
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text" id="sample1">
		    <label class="mdl-textfield__label" for="sample1">DIRECCION</label>
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
		<!-- Numeric Textfield -->
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
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Encargado de Ventas</label>
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
		<!-- Numeric Textfield -->
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
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Correo Institucional</label>
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

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Encargado de Compras</label>
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
		<!-- Numeric Textfield -->
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
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Correo Institucional</label>
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

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Encargado Jurídico</label>
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
		<!-- Numeric Textfield -->
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
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Correo Institucional</label>
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

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Encargado de Operaciones</label>
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
		<!-- Numeric Textfield -->
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
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" id="sample3">
		    <label class="mdl-textfield__label" for="sample3">Correo Institucional</label>
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
@stop