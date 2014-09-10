<!--default layout-->
<!doctype html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>learningLaravel</title>
<head>

 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
 
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

 
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


</head>
<body>
		<div class="container col-md-8 col-md-offset-2">
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">

	<nav class="navbar navbar-default" role="navigation">
	   <div class="navbar-header">
	   	<ul class="nav navbar-nav">
	   		<li class="active"> <a href="./">Home</a></li>
	   		<li><a href="./about">About</a></li>
	   		<li><a href="./contact">Contact</a></li>
	   	 </ul>
	 </div>
  </nav>
	   	
@yield('content')
</div>

</body>
</html>
		