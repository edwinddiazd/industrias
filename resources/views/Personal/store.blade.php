@extends ('main')
@section ('content')

<h5>Datos del Personal<br></h5>

<!--FORMULARIO PARA LOS DATOS DEL PERSONAL-->
<form method="POST" action="{{route('Personal.store')}}">
<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
				<select style="border-color: blue;" name="cargo_personal">
			    	<option value="Selecciones el cargo">Selecciones el cargo</option>
			    	<option value="Encargado Ventas">Encargado Ventas</option>
			    	<option value="Encargado Compras">Encargado Compras</option>
			    	<option value="Encargado Juridico">Encargado Juridico</option>
			    	<option value="Encargado Operaciones">Encargado Operaciones</option>
			    	<option value="Encargado Seguridad Integral">Encargado Seguridad Integral</option>
			    	<option value="Encargado Seguridad Industrial">Encargado Seguridad Industrial</option>
			    	<option value="Encargado Bienes">Encargado Bienes</option>
			    	<option value="Encargado Gestión Humana">Encargado Gestión Humana</option>
			    	<option value="Encargado Tecnología">Encargado Tecnología</option>
			    	<option value="Encargado Comunicaciones">Encargado Comunicaciones</option>
			    </select>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					<input class="mdl-textfield__input" type="text" id="nombre_personal" name="nombre_personal">
			    	<label class="mdl-textfield__label" for="nombre_personal" name="nombre_personal">Nombre</label>
			</div>
		</div>

		<div class="mdl-cell mdl-cell--4-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					<input class="mdl-textfield__input" type="text" id="apellido_personal" name="apellido_personal">
			    	<label class="mdl-textfield__label" for="apellido_personal" name="apellido_personal">Apellido</label>
			</div>
		</div>

		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal" name="cedula_personal">
			    <label class="mdl-textfield__label" for="cedula_personal">CEDULA</label>
			    <span class="mdl-textfield__error">Input is not a number!</span>
			  </div>
		</div>
	</div>
	<div class="mdl-cell mdl-cell-1-col-offset mdl-cell--4-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_industria" name="direccion_personal"></textarea>
			    		<label class="mdl-textfield__label" for="direccion_industria" name="direccion_personal">DIRECCION</label>
					</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--6-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal" name="email_personal">
			    <label class="mdl-textfield__label" for="email_personal" name="email_personal">CORREO INSTITUCIONAL</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal" name="telefono1_personal">
				<label class="mdl-textfield__label" for="telefono1_personal" name="telefono1_personal">TELEFONO N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal" name="telefono2_personal">
				<label class="mdl-textfield__label" for="telefono2_personal" name="telefono2_personal">TELEFONO N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Agregar">
	<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>

@stop