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
    <div class="mdl-grid mdl-color--transparent" style="max-width: 1080px; padding-left: 10%;padding-top: 5%;">
    	<div class="mdl-layout-spacer"></div>
		<div class="mdl-cell mdl-cell--3-offset-desktop mdl-cell--9-col-desktop" style="height: 585px; overflow-y: scroll;">
		    @yield ('content') <!--Your content goes here -->
		</div>
    </div>
  </main>
	

</body>
<script src="material.min.js"></script>
</html>