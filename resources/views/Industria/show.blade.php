@extends('main2')

@section('title','| Datos del registro')

@section('content')

	<h3>Esta es la informacion de {{ $industria->industria }}</h3>
	<h4>el rif de {{ $industria->industria }} es: {{ $industria->rif_industria }} </h4>
@stop