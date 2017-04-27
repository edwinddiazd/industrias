@extends ('main')
@section ('content')
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--2-col-offset mdl-cell--7-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 8%;">
		<div class="mdl-layout-spacer "></div>
		<div class="mdl-color--indigo-A700" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
      		<span class="mdl-layout-title mdl-color-text--white">Registro de Proyecciones</span>
      		<div class="mdl-layout-spacer"></div>
		</div>
		<form method="POST" action="{{route('Proyeccion.store')}}">
			<div class="mdl-grid">
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--5-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="selec_product">
						<option>Seleccione el producto</option>
						@foreach ($productos as $produ)
					    	<option value="{{ $produ->id }}">{{$produ->producto}}</option>
					    @endforeach
				    	</select>
					</div>
				</div>
				<div class="mdl-layout-spacer"></div>
			</div>
			<div class="mdl-grid">
			<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--6-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="proyeccion" name="proyeccion">
				    		<label class="mdl-textfield__label" for="proyeccion" name="proyeccion">Proyecci&oacute;n</label>
						</div>
				</div>
				<div class="mdl-cell mdl-cell--6-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="cap_oper" name="cap_oper">
				    		<label class="mdl-textfield__label" for="cap_oper" name="cap_oper">Capacidad</label>
						</div>
				</div>
			<div class="mdl-layout-spacer"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-layout-spacer"></div>
					<div class="mdl-cell mdl-cell--4-col">
						<input type="submit" value="AGREGAR" class="mdl-button mdl-js-button mdl-button--primary mdl-snackbar__action">
					</div>
				<div class="mdl-layout-spacer"></div>
			</div>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
		<div class="mdl-layout-spacer"></div>
</div>

@stop