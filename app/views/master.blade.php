<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PetsApp</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<h1>Team 5 Pet Shop</h1><!--ADD A TWO PART HEADER HERE-->
		<h2>We love animals</h2>
		<div class="page-header"> @yield('header') </div>
			@if(Session::has('message'))
			<div class="alert alert-success">{{Session::get('message')}}</div>
			@endif
			@yield('content')
			@yield('footer')
			</div>
</body>
</html>