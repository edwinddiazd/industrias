<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEIPBES</title>
	<link rel="stylesheet" href="material.min.css">
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
<script src="material.min.js"></script>
</html>