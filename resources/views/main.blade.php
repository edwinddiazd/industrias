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
    <div class="mdl-grid mdl-color--transparent" style="max-width: 1200px; padding-left: 15%;padding-top: 4%;">
		<div class="mdl-cell mdl-cell--1-offset-desktop mdl-cell--11-col-desktop" style="height: 580px;">
		    @yield ('content')
		</div>
    </div>
  </main>
	

</body>
<script src="material.min.js"></script>
</html>