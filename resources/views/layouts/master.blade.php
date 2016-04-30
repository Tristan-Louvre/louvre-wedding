<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Byron and Marguerite's Wedding Website</title>
	@yield('pageSpecificFonts')
		<link href="/css/app.css" rel="stylesheet">
		<link href="/css/main.css" rel="stylesheet">

	</head>
	<body class="@yield('css')">

	@yield('content')
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	@yield('pageSpecificScripts')

	</body>
</html>
