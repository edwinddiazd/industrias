<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEIPBES</title>
	<link rel="stylesheet" href="material.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
@include('partials._navbar')
<main class="mdl-layout__content">
    <div class="page-content">
    @yield ('content')<!-- Your content goes here --></div>
  </main>
	

</body>
<script src="material.min.js"></script>
</html>