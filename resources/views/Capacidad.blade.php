@extends ('main')
@section ('content')
<div class="mdl-grid">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-cell mdl-cell--2-col-offset mdl-cell--7-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 8%;">
		<div class="mdl-layout-spacer "></div>
		<div class="mdl-color--indigo-A700" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
      		<span class="mdl-layout-title mdl-color-text--white">Capacidad</span>
      		<div class="mdl-layout-spacer"></div>
		</div>
		<form method="POST" action="{{route('Capacidad.store')}}">
			<div class="mdl-grid">
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--5-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						<select style="border-color: blue;" name="">
						<option>Seleccione el producto</option>
						@foreach ($productos as $produ)
					    	<option>{{$produ->producto}}</option>
					    @endforeach
				    	</select>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--5-col">
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="criticidad">
					<span class="mdl-checkbox__label">Producto Cr&iacute;tico</span>
  					<input type="checkbox" id="criticidad" class="mdl-checkbox__input">
  					</label>
				</div>
				<div class="mdl-layout-spacer"></div>
			</div>
			<div class="mdl-grid">
			<div class="mdl-layout-spacer"></div>
				<div class="mdl-cell mdl-cell--6-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="cap_inst" name="cap_inst">
				    		<label class="mdl-textfield__label" for="cap_inst" name="cap_inst">Capacidad Instalada</label>
						</div>
				</div>
				<div class="mdl-cell mdl-cell--6-col">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
							<input class="mdl-textfield__input" type="text" id="cap_inst_oper" name="cap_inst_oper">
				    		<label class="mdl-textfield__label" for="cap_inst_oper" name="cap_inst_oper">Capacidad Instalada Operativa</label>
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