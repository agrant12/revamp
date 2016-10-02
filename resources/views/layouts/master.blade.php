<html>
	<head>
		<title>Alvin Grant</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

	</head>
	@include('partials/header')
	<body>
		<div class="container">
			<div class="content">
				@yield('content')
			</div>
		</div>
		@include('partials/footer')
	</body>
</html>
