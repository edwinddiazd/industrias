@extends ('main')

@section ('title','|Industrias Registradas')

@section ('content')

<div>
	<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th>id</th>
      <th>Industria</th>
      <th>RIF</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($industrias as $industria)
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