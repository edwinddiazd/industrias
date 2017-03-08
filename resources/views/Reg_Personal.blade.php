@extends ('main')
@section ('content')
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--12-col mdl-shadow--3dp mdl-color--grey-100">
	<h5 style="margin-left: 2%;">Datos del Personal<br></h5>
		<form method="POST" action="{{route('Personal.store')}}">
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal1">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal1" name="nombre_personal1">
				    	<label class="mdl-textfield__label" for="nombre_personal" name="nombre_personal1">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal1" name="apellido_personal1">
				    	<label class="mdl-textfield__label" for="apellido_personal1" name="apellido_personal1">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal1" name="cedula_personal1">
					    <label class="mdl-textfield__label" for="cedula_personal1" name="cedula_personal1">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal1" name="direccion_personal1"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_personal1" name="direccion_personal">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal1" name="email_personal1">
			    <label class="mdl-textfield__label" for="email_personal1" name="email_personal1">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal1" name="telefono1_personal1">
				<label class="mdl-textfield__label" for="telefono1_personal1" name="telefono1_personal1">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal1" name="telefono2_personal1">
				<label class="mdl-textfield__label" for="telefono2_personal1" name="telefono2_personal1">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal2">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal2" name="nombre_personal2">
				    	<label class="mdl-textfield__label" for="nombre_personal2" name="nombre_personal2">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal2" name="apellido_personal2">
				    	<label class="mdl-textfield__label" for="apellido_personal2" name="apellido_personal2">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal2" name="cedula_personal2">
					    <label class="mdl-textfield__label" for="cedula_personal2">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal2" name="direccion_personal2"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_personal2" name="direccion_personal2">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal2" name="email_personal2">
			    <label class="mdl-textfield__label" for="email_personal2" name="email_personal2">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal2" name="telefono1_personal2">
				<label class="mdl-textfield__label" for="telefono1_personal2" name="telefono1_personal2">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal2" name="telefono2_personal2">
				<label class="mdl-textfield__label" for="telefono2_personal2" name="telefono2_personal2">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal3">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal3" name="nombre_personal3">
				    	<label class="mdl-textfield__label" for="nombre_personal3" name="nombre_personal3">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal3" name="apellido_personal3">
				    	<label class="mdl-textfield__label" for="apellido_personal3" name="apellido_personal3">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal3" name="cedula_personal3">
					    <label class="mdl-textfield__label" for="cedula_personal3">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal3" name="direccion_personal3"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_personal3" name="direccion_personal3">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal3" name="email_personal3">
			    <label class="mdl-textfield__label" for="email_personal3" name="email_personal3">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal3" name="telefono1_personal3">
				<label class="mdl-textfield__label" for="telefono1_personal3" name="telefono1_personal3">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal3" name="telefono2_personal3">
				<label class="mdl-textfield__label" for="telefono2_personal3" name="telefono2_personal3">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal4">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal4" name="nombre_personal4">
				    	<label class="mdl-textfield__label" for="nombre_personal4" name="nombre_personal4">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal4" name="apellido_personal4">
				    	<label class="mdl-textfield__label" for="apellido_personal4" name="apellido_personal4">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal4" name="cedula_personal4">
					    <label class="mdl-textfield__label" for="cedula_personal4">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal4" name="direccion_personal4"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_personal4" name="direccion_personal4">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal4" name="email_personal4">
			    <label class="mdl-textfield__label" for="email_personal4" name="email_personal4">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal4" name="telefono1_personal4">
				<label class="mdl-textfield__label" for="telefono1_personal4" name="telefono1_personal4">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal4" name="telefono2_personal4">
				<label class="mdl-textfield__label" for="telefono2_personal4" name="telefono2_personal4">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal5">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal5" name="nombre_personal5">
				    	<label class="mdl-textfield__label" for="nombre_personal5" name="nombre_personal5">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal5" name="apellido_personal5">
				    	<label class="mdl-textfield__label" for="apellido_personal5" name="apellido_personal5">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal5" name="cedula_personal5">
					    <label class="mdl-textfield__label" for="cedula_personal5">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal5" name="direccion_personal5"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_personal5" name="direccion_personal5">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal5" name="email_personal5">
			    <label class="mdl-textfield__label" for="email_personal5" name="email_personal5">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal5" name="telefono1_personal5">
				<label class="mdl-textfield__label" for="telefono1_personal5" name="telefono1_personal5">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal5" name="telefono2_personal5">
				<label class="mdl-textfield__label" for="telefono2_personal5" name="telefono2_personal5">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal6">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal6" name="nombre_personal6">
				    	<label class="mdl-textfield__label" for="nombre_personal6" name="nombre_personal6">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal6" name="apellido_personal6">
				    	<label class="mdl-textfield__label" for="apellido_personal6" name="apellido_personal6">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal6" name="cedula_personal6">
					    <label class="mdl-textfield__label" for="cedula_personal6">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal6" name="direccion_personal6"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_industria6" name="direccion_personal6">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal6" name="email_personal6">
			    <label class="mdl-textfield__label" for="email_personal6" name="email_personal6">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal6" name="telefono1_personal6">
				<label class="mdl-textfield__label" for="telefono1_personal6" name="telefono1_personal6">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal6" name="telefono2_personal6">
				<label class="mdl-textfield__label" for="telefono2_personal6" name="telefono2_personal6">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal7">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal7" name="nombre_personal7">
				    	<label class="mdl-textfield__label" for="nombre_personal7" name="nombre_personal7">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal7" name="apellido_personal7">
				    	<label class="mdl-textfield__label" for="apellido_personal7" name="apellido_personal7">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal7" name="cedula_personal7">
					    <label class="mdl-textfield__label" for="cedula_personal7">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal7" name="direccion_personal7"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_personal7" name="direccion_personal7">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal7" name="email_personal7">
			    <label class="mdl-textfield__label" for="email_personal7" name="email_personal7">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal7" name="telefono1_personal7">
				<label class="mdl-textfield__label" for="telefono1_personal7" name="telefono1_personal7">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal7" name="telefono2_personal7">
				<label class="mdl-textfield__label" for="telefono2_personal7" name="telefono2_personal7">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal8">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal8" name="nombre_personal8">
				    	<label class="mdl-textfield__label" for="nombre_personal8" name="nombre_personal8">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal8" name="apellido_personal8">
				    	<label class="mdl-textfield__label" for="apellido_personal8" name="apellido_personal8">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal8" name="cedula_personal8">
					    <label class="mdl-textfield__label" for="cedula_personal8">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal8" name="direccion_personal8"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_personal8" name="direccion_personal8">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal8" name="email_personal8">
			    <label class="mdl-textfield__label" for="email_personal8" name="email_personal8">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal8" name="telefono1_personal8">
				<label class="mdl-textfield__label" for="telefono1_personal8" name="telefono1_personal8">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal8" name="telefono2_personal8">
				<label class="mdl-textfield__label" for="telefono2_personal8" name="telefono2_personal8">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="cargo_personal9">
					    	<option value="Selecciones el cargo">Seleccione el cargo</option>
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
						<input class="mdl-textfield__input" type="text" id="nombre_personal9" name="nombre_personal9">
				    	<label class="mdl-textfield__label" for="nombre_personal9" name="nombre_personal9">Nombre</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="apellido_personal9" name="apellido_personal9">
				    	<label class="mdl-textfield__label" for="apellido_personal9" name="apellido_personal9">Apellido</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula_personal9" name="cedula_personal9">
					    <label class="mdl-textfield__label" for="cedula_personal9">C&eacute;dula</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
			  		</div>
				</div>
			</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_personal9" name="direccion_personal9"></textarea>
	    		<label class="mdl-textfield__label" for="direccion_personal9" name="direccion_personal9">Direcci&oacute;n</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
			    <input class="mdl-textfield__input" type="text" id="email_personal9" name="email_personal9">
			    <label class="mdl-textfield__label" for="email_personal9" name="email_personal9">Correo Institucional</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono1_personal9" name="telefono1_personal9">
				<label class="mdl-textfield__label" for="telefono1_personal9" name="telefono1_personal9">Tel&eacute;fono N°1</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telefono2_personal9" name="telefono2_personal9">
				<label class="mdl-textfield__label" for="telefono2_personal9" name="telefono2_personal9">Tel&eacute;fono N°2</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Agregar">
			<input type="hidden" name="industrias_id" value="{{ $indicador->id }}">
			<input type="hidden" name="_token" value="{{ Session::token() }}">	
		</div>
	</div>
	
</form>
</div>
</div>
<!--FORMULARIO PARA LOS DATOS DEL PERSONAL-->


@stop