<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RCV</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom-app.css') }}" rel="stylesheet">
</head>
<body>

	<main class="container">
		@yield('module')
	</main>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/custom-app.js') }}"></script>
</body>
</html>