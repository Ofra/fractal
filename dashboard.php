
<html lang="es" ng-app="DashBoard">
	<head>
		<meta charset="utf-8">
		<!--Autor Oscar Francisco Ramírez Andalón email: ofra.2925@gmail.com-->
		<meta name="author" content="Oscar Francisco Ramírez Andalón">
		<meta name="contact" content="ofra.2925@gmail.com">
		<meta name="description" content='Fractal' />
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
		<title>Fractal-Dashboard</title>
		<script src="lib/Angular/angular.min.js"></script>
		<script src="js/controladores.js"></script>
		<script src="js/app.js"></script>
		<script src="lib/Angular/angular-route.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/dash.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/team.css">
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<nav>
			<img class="img-user" src="img/oscar traje.gif" />	
				<ul>
					<li><a class="icon-briefcase" href="Backoffice"><label class="leter"> Dashboard FractalH&T</label></a></li>
					<li><a class="icon-home" href="Inicio"> Home</a></li>

					<li><a class=""href=""> Oscar Francisco <a class="icon-caret-down"></a></a></li>		

				</ul>
				
			</nav>
		</header>
		<section id="container">
			<section class="container1">
				<ul id="admin-menu">
					<li>
						<a href="#"><img class="admin-img" src="img/oscar traje.gif">Oscar Francisco <label class="icon-chevron-circle-right"for=""></label></a>
					</li>
					<li>
						<a href="#">Dashboard <label class="icon-gear"for=""></label></a>
					</li>
					<li>
						<a href="#">Users <label class="icon-user"for=""></label></a>
					</li>
					<li>
						<a href="#/Work_team">Team Work<label class="icon-group"for=""></label></a>
					</li>
					<li>
						<a href="#">About of: <label class="icon-list"for=""></label></a>
					</li>
				</ul>
				
			</section>
			<section class="container1" ng-view>
				
			</section>

		</section>
		<footer>
			
		</footer>
	</body>

</html>