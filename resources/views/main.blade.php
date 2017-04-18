<!DOCTYPE html>
<html>
<head>
	<title>SEIPBES</title>
	<link rel="stylesheet" href="{{ URL::asset('material.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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