<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PetsApp</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
	<style type="text/css">
		h1 {
			float: left;
		}
		.quote {
			float: left;
			padding-top: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Team 5 Pet Shop</h1>
		<div class="quote">
			<h2 class="text-muted">We love animals</h2>
		</div>
		<div class="page-header"> 
			{{"<br>"}}
			@yield('header') 
		</div>
		@if(Session::has('message'))
		<div class="alert alert-success">
			{{Session::get('message')}}
		</div>
		@endif
		@yield('content')
		<p class="text-center">{{"<br>"}}Stop by today!</p>
	</div>
</body>
</html>