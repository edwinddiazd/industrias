<!DOCTYPE html>
<html>
<head>
	<title>SEIPBES</title>
	<link rel="stylesheet" href="{{ URL::asset('material.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="mdl-color--grey-50">
	@include('partials._navbar')
	<main class="mdl-layout__content">
	    @include('partials._messages')
		@yield ('content')
	</main>
	</div>
</body>
<script src="{{ URL::asset('material.min.js') }}"></script>
<script src="{{ URL::asset('js/select2.min.js') }}"></script>
</html>