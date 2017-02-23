<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEIPBES</title>
	<link rel="stylesheet" href="material.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<main class="mdl-layout__content">
    <div class="mdl-grid mdl-color--red-100" style="max-width: 1080px;">
		<div class="mdl-cell mdl-cell--3-offset-desktop mdl-cell--9-col-desktop">
			@yield ('content')<!-- Your content goes here -->
		</div>

    </div>
  </main>
	

</body>
<script src="material.min.js"></script>
</html>