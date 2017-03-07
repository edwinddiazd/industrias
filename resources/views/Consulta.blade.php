@extends ('main')

@section ('title','|Personal Registrado')

@section ('content')

<div>
	<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th>Cargo</th>
      <th>Nombre</th>
      <th>Apellidos</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($personal as $persona)
    <tr>
      <td>{{$industria->id}}</td>
      <td>{{$industria->industria}}</td>
      <td>{{$industria->rif_industria}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@stop