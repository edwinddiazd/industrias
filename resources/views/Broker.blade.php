@extends ('main')
@section ('content')

<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--2-col-offset mdl-cell--7-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 8%;">
		<div class="mdl-layout-spacer "></div>
		<div class="mdl-color--indigo-A700" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
      		<span class="mdl-layout-title mdl-color-text--white">Registro Único de Compradores Internacionales</span>
      		<div class="mdl-layout-spacer"></div>
		</div>
		<form method="POST" action="{{route('Broker.store')}}">
			<div class="mdl-grid">
			<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--6-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="name" name="nombre">
				    		<label class="mdl-textfield__label" for="name" name="nombre">Nombre</label>
						</div>
				</div>
			<div class="mdl-layout-spacer"></div>
			</div>
			<div class="mdl-grid">
			<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--6-col">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<textarea class="mdl-textfield__input" type="text" rows="3" id="descripcion" name="direcccion"></textarea>
				    		<label class="mdl-textfield__label" for="descripcion" name="direccion">Direcci&oacute;n</label>
						</div>
				</div>
			<div class="mdl-layout-spacer"></div>
			</div>
			<div class="mdl-grid">
			<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--6-col">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text"  id="unidad" name="tlf1">
					    <label class="mdl-textfield__label" for="unidad" name="tlf1">Tel&eacute;fono m&oacute;vil</label>
					  </div>
				</div>
			<div class="mdl-layout-spacer"></div>
			</div>
			<div class="mdl-grid">
			<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--6-col">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text"  id="unidad" name="tlf2">
					    <label class="mdl-textfield__label" for="unidad" name="tlf2">Tel&eacute;fono Otro</label>
					  </div>
				</div>
			<div class="mdl-layout-spacer"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-layout-spacer"></div>
					<div class="mdl-cell mdl-cell--4-col">
						<input type="submit" value="REGISTRAR" class="mdl-button mdl-js-button mdl-button--primary mdl-snackbar__action">
					</div>
				<div class="mdl-layout-spacer"></div>
			</div>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
		<div class="mdl-layout-spacer"></div>
</div>


@stop                        