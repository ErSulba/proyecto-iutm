<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Bootstrap core CSS -->
	<link href="blog-clean/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="blog-clean/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<link href="blog-clean/css/clean-blog.min.css" rel="stylesheet">
	<!-- Scripts -->
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
	</script>
</head>
<body>
<div id="app" class="">
	@include('layouts.nav')
	@yield('content')
</div>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="blog-clean/vendor/jquery/jquery.min.js"></script>
<script src="blog-clean/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="blog-clean/js/clean-blog.min.js"></script>
</body>
</html>