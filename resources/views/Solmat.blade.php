@extends ('main')
@section ('content')
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--2-col-offset mdl-cell--7-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 8%;">
		<div class="mdl-layout-spacer "></div>
		<div class="mdl-color--indigo-A700" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
      		<span class="mdl-layout-title mdl-color-text--white">Solicitud de Materias Primas</span>
      		<div class="mdl-layout-spacer"></div>
		</div>
		<form method="POST" action="{{route('Solmat.store')}}">
			<div class="mdl-grid" style="margin-left: 5%;">
			<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--6-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="capacidad" name="capacidad">
				    		<label class="mdl-textfield__label" for="capacidad" name="capacidad">Capacidad de Almacenamiento</label>
						</div>
				</div>
				<div class="mdl-cell mdl-cell--6-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="solicitud" name="solicitud">
				    		<label class="mdl-textfield__label" for="solicitud" name="solicitud">Cantidad solicitada</label>
						</div>
				</div>
			<div class="mdl-layout-spacer"></div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--5-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="materias_id">
						<option>Seleccione la Materia Prima</option>
						@foreach ($materias as $mat)
					    	<option value="{{ $mat->id }}">{{$mat->nombre}}</option>
					    @endforeach
				    	</select>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--2-col">
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="criticidad">
					<span class="mdl-checkbox__label">Materia Cr&iacute;tica</span>
  					<input type="checkbox" id="criticidad" class="mdl-checkbox__input">
  					</label>
				</div>
				<div class="mdl-cell mdl-cell--5-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="productos_id">
						<option>Seleccione el Producto</option>
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
					<div class="mdl-cell mdl-cell--1-col">
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