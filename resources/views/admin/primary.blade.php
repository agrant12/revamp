<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alvin Grant - @yield('title')</title>
	<style type="text/css" href="{{ asset('css/app.css') }}"></style>
</head>
<body>
	<header>
		<h1>Alvin Grant</h1>
	</header>
	<aside class="sidebar">
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="{{ route('admin.blog') }}">Blog</a></li>
			<li><a href="{{ route('admin.development') }}">Development</a></li>
			<li><a href="{{ route('admin.photography') }}">Photography</a></li>
			<li><a href="{{ route('admin.profile') }}">Profile</a></li>
			<li><a href="{{ route('admin.contact') }}">Contact</li>
		</ul>
	</aside>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>