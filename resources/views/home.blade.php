@extends('main')
@section('content')
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--4-col-offset mdl-cell--5-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 10%;">
		<div class="mdl-layout-spacer "></div>
		<div class="mdl-color--indigo-A700" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
      		<span class="mdl-layout-title mdl-color-text--white">SEIPBES</span>
      		<div class="mdl-layout-spacer"></div>
		</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--2-col-offset mdl-cell--8-col">
				<form action="#">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 40px;">
					<input class="mdl-textfield__input" type="text" id="user_input">
					<label class="mdl-textfield__label" for="user_input">Usuario</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 40px;">
					<input class="mdl-textfield__input" type="text" id="pwd_input">
					<label class="mdl-textfield__label" for="pwd_input">Password</label>
				</div>
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col">
						<button type="submit" class="mdl-button mdl-js-button mdl-button--primary">Ingresar</button>
					</div>
					<div class="mdl-cell mdl-cell--8-col-offset mdl-cell--4-col" style="margin-left: 15%;">
					<button class="mdl-button mdl-js-button mdl-button--accent">
					Registrarse <a href="Registro_Iundustrias" style="text-decoration: none;"></a>
					</button>
					</div>
				</div>
				</form>
			</div>
		</div>
		<div class="mdl-layout-spacer"></div>
		</div>
	<div class="mdl-layout-spacer"></div>
</div>
@stop