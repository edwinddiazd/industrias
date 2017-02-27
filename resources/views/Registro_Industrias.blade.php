@extends ('main2')
@section ('content')
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--2-col-offset mdl-cell--8-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 8%;">
		<div class="mdl-layout-spacer "></div>
		<div class="mdl-color--indigo-400" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
      		<span class="mdl-layout-title mdl-color-text--white">SEIPBES</span>
      		<div class="mdl-layout-spacer"></div>
		</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col">
				<form method="POST" action="{{route('Industria.store')}}">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<input class="mdl-textfield__input" type="text" id="sample1">
			    		<label class="mdl-textfield__label" for="sample1">INDUSTRIA</label>
					</div>
				</form>
			</div>
			<div class="mdl-cell mdl-cell-1-col-offset mdl-cell--4-col">
				<form action="#">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<textarea class="mdl-textfield__input" type="text" rows= "1" id="sample2"></textarea>
			    		<label class="mdl-textfield__label" for="sample2">DIRECCION</label>
					</div>
				</form>
			</div>
		</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col">
					<form action="#">
					  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample3" >
					    <label class="mdl-textfield__label" for="sample3">TELEFONO N°1</label>
					    <span class="mdl-textfield__error">Input is not a number!</span>
					  </div>
					</form>
				</div>
				<div class="mdl-cell  mdl-cell-2-col-offset mdl-cell--4-col">
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
				<div class="mdl-cell mdl-cell--4-col">
					<form action="#">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="sample1">
				    		<label class="mdl-textfield__label" for="sample1">RIF</label>
						</div>
					</form>
				</div>
			</div>
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col">
						<button type="submit" class="mdl-button mdl-js-button mdl-button--primary">Registrar</button>
					</div>
				</div>
			</form>
		</div>
		<div class="mdl-layout-spacer"></div>
		</div>
	<div class="mdl-layout-spacer"></div>
</div>
@stop