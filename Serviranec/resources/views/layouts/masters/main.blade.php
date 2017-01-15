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
		<script type="text/javascript" src="{{ asset('js/search.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	</head>
	<body >
		@yield('page-content')
		@yield('scripts')
	</body>	
</html>