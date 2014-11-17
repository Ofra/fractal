<?php
	session_start();
	include('php/conexion.php');
	if (!isset($_SESSION['id'])){
		
		header('Location: Inicio_sesion');
	}else{ 	
		//header('Location: Admin');
	}
?>
<html lang="en" ng-app="DashBoard">
	<head>
		<meta charset="utf-8">
		<!--Autor Oscar Francisco Ramírez Andalón email: ofra.2925@gmail.com-->
		<meta name="author" content="Oscar Francisco Ramírez Andalón">
		<meta name="contact" content="ofra.2925@gmail.com">
		<meta name="description" content='Fractal' />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
		<title>Fractal-Dashboard</title>
		<script src="lib/Angular/angular.min.js"></script>
		<script src="js/controladores.js"></script>
		<script src="js/app.js"></script>
		<script src="lib/Angular/angular-route.min.js"></script>
		<script src="https://code.angularjs.org/1.2.26/angular-animate.min.js"></script>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/dash1.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/team.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style_boots.css">
		<link rel="stylesheet" href="css/contenedor.css">
		<link rel="stylesheet" href="css/footer-admin.css">
		<link rel="stylesheet" href="css/user-main.css">
		<link rel="stylesheet" href="css/back.css">
		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
		  
		<!-- jQuery -->
		<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>

			<nav class="navbar navbar-default mio-nav" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header mio-head-nav">
			      <button type="button" class="navbar-toggle collapsed btn-nav-res" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand mio-nav-a" href="Admin"> FractalH&T Dashboard </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right oscar">
			        <li><a href="Inicio" class="icon-home mio-nav-a"> 	Home</a></li>
			        <li class="dropdown ">
			          <a class="dropdown-toggle mio-nav-a" data-toggle="dropdown"><img class="img-user" src=" <?php echo $_SESSION['image']; ?>" width="30px" height="35px"/> <?php echo $_SESSION['name_user']; ?><span class="caret"></span></a>
			          <ul class="dropdown-menu nav-menu-res" role="menu">
			          	<li><a href="#/Admin" >Dashboard</a></li>
			            <li><a href="#/Users" >Users</a></li>
			            <li><a href="#/Team" >Work Team</a></li>
			            <li><a href="#" >About us</a></li>
			            <li class="divider"></li>
			            <li><a href="php/Cierre_sesion.php">Logout</a></li>
			          </ul>
			        </li>
			      </ul>

			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->

			</nav>
			
		</header>
		
		<section id="contenedor" class="page-container">
			<section class="side-bar">
				<ul id="admin-menu">
					<li>
						<a><img class="admin-img" src="<?php echo $_SESSION['image']; ?>" width="30px" height="40px"> <?php echo $_SESSION['name_user']; ?><label class="icon-chevron-circle-right"for=""></label></a>
					</li>
					<li>
						<a href="#/Admin">Dashboard <label class="icon-gear"for=""></label></a>
					</li>
					<li>
						<a href="#/Users">Users<label class="icon-user"for=""></label></a>
					</li>
					<li>
						<a id="tab-team" href="#/Team">Work Team<label class="icon-group"for=""></label></a>
					</li>
					<li>
						<a href="#">About us <label class="icon-list"for=""></label></a>
					</li>
				</ul>
				
			</section>
			<section class="page-content" >
				<div class="page-content-inner" data-ng-init="init()" ng-view>
					
				</div>
				<footer>
					<div class="foot">
						<label class="icon-desktop"for=""></label><br>
						<label for="">© 2014 Ofra's DashBoard </label><br>
						
						
					</div>
				</footer>
			</section>
			
		</section>
		
		

		
		  <script src="js/bootstrap.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	  <script>
/*
	  		$('#tab-team').click(function(){
	  			$('#table_id').DataTable();
	  		});*/
	  </script>
		
	</body>

</html>