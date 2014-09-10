<!doctype html>
<html lang="en">
<head>
	<meta charset=UTF-8>
	<title> Learning Laravel Website </title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootsrap.min.css">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
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
</body>
</html>
		