@extends ('main')
@section ('content')
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--2-col-offset mdl-cell--8-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 8%;">
		<div class="mdl-layout-spacer "></div>
		<div class="mdl-color--indigo-400" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
      		<span class="mdl-layout-title mdl-color-text--white">SEIPBES</span>
      		<div class="mdl-layout-spacer"></div>
		</div>
		<form method="POST" action="{{route('Industria.store')}}">
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="industria" name="industria">
				    		<label class="mdl-textfield__label" for="industria" name="industria">INDUSTRIA</label>
						</div>
				</div>
				<div class="mdl-cell mdl-cell-1-col-offset mdl-cell--4-col">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<textarea class="mdl-textfield__input" type="text" rows="1" id="direccion_industria" name="direccion_industria"></textarea>
				    		<label class="mdl-textfield__label" for="direccion_industria" name="direccion_industria">DIRECCION</label>
						</div>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample3" name="telefono1_industria">
					    <label class="mdl-textfield__label" for="telefono1_industria" name="telefono1_industria">TELEFONO N°1</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
					  </div>
				</div>
				<div class="mdl-cell  mdl-cell-2-col-offset mdl-cell--4-col">
					  <div class="mdl-textfield mdl-js-textfield">
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2" name="telefono2_industria">
					    <label class="mdl-textfield__label" for="telefono2_industria" name="telefono2_industria">TELEFONO N°2</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
					  </div>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="sample1" name="rif_industria">
				    		<label class="mdl-textfield__label" for="sample1" name="rif_industria">RIF</label>
						</div>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					<input type="submit" value="REGISTRAR" class="mdl-button mdl-js-button mdl-button--primary mdl-snackbar__action">
				</div>
			</div>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
		<div class="mdl-layout-spacer"></div>
</div>
@stop