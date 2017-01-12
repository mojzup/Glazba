<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Mojca Zupančič">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Glazba - Kjer ni dovolj le glasba</title>
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	</head>
	<body >
		@yield('page-content')
		@yield('scripts')
	</body>	
</html>