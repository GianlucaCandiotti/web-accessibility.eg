<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Base page</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">

		<div class="navbar-header">
			<a class="navbar-brand" href="#">
        {{ HTML::image('img/logocs.svg', 'Code School') }}
			</a>
		</div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Sign in</a></li>
      <li><a href="#">Sign up</a></li>
      <li><a href="#">Courses</a></li>
    </ul>

	</div>
</nav>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>