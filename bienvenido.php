<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="icon" type="image/png" href="imgs/umglogo.png" />
	<link href='https://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>
	<title> Estadistica 2017</title> <!-- -->
	<style type="text/css">
		body{
			padding-top: 20px; <!-- tamaño de la barra de navegacion es de 80 px-->
		}
	</style>
	
</head>
<script type="text/javascript">
function alerta() {
alert("¡Gracias Por Contactarnos!");}
</script>
<?php
	session_start();
	if (!isset($_SESSION["sessionUsuario"])){
		header("location:/preguntadevs/");
	}
	
 ?>
<body class="">
<?php 
		echo "Bienvenido: ". $_SESSION["sessionUsuario"];
	 ?>
	<div class="container-fluid">  
		<header>  <!-- barra de navegacion  -->
			<nav class=" navbar navbar-default navbar-fixed-top navbar-inverse"> 
				<div class="container-fluid">
					<div class="navbar-header "> 
						<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
							<span class="sr-only"></span>
							<span class="glyphicon glyphicon-th-list"></span> <!-- usando un icono para que muestre como menu-->
							<span class="icon-bar"></span> 
						</button>
						<a href="index.html" class="navbar-brand">Estadistica2</a> 
					</div>
					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							<li><a href="#"> <span class="glyphicon glyphicon-envelope visible-xs"> Contacto </span> <span class="visible-sm visible-md visible-lg">  Contacto</span> </a></li>
							<li><a href="pacman.html">  <span class="glyphicon glyphicon-folder-open visible-xs"> Jugar </span> <span class="visible-sm visible-md visible-lg">  Jugar</span></a></li>
							<li>
								<a class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-extended="true"><span class="glyphicon glyphicon-user visible-xs"> Perfil </span> <span class="visible-sm visible-md visible-lg">  Perfil <span class="caret"></span> </span>
				<!-- icono del trianguilito-->
			</a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"> <!--lista de elemnetos -->
				<li><a href="#"> <span class="glyphicon glyphicon-briefcase visible-xs"> Tablero </span> <span class="visible-sm visible-md visible-lg">  Tablero</span> </a></li>
				<li><a href="#"> <span class="glyphicon glyphicon-user visible-xs"> Configuracion </span> <span class="visible-sm visible-md visible-lg">  Configuracion</span> </a></li>
				<li><a href="php/cerrarSession.php"> <span class="glyphicon glyphicon-remove-sign visible-xs"> Cerrar Sesión </span> <span class="visible-sm visible-md visible-lg">  Cerrar Sesión</span> </a></li>
			</ul>
							</li>
						</ul>

						<form action="http://www.google.es/search" method="GET" class="navbar-form navbar-right" role="search" > 
						<div class="form-group">
							<input type="hidden" name="ie" value="UTF-8">
							<input type="hidden" name="ie" value="UTF-8">
							
					        <input type="hidden" name="domains" value="http://umgproyectos.hol.es/" />
					        <input class="hidden" type="radio" name="sitesearch" value="http://umgproyectos.hol.es/" checked  />
					        <div class="form-group">
								<div class="input-group ">
									<label class="sr-only" for="correo">Buscar</label> 
									<span>
									<span><input type="text" class="form-control" placeholder="Buscar"> 
									</span>
									<button class="btn btn-default pull-right"> <span class="glyphicon glyphicon-search "></span>

									</button>
									
									</span>
									<div class=""></div>
									
								</div>
							</div>
						</div>
						
					</form>
					</div>
				</div>
			</nav>
		</header>
	</div>
	<section class="container">
		<section class=" col-md-9">
		<article class=" text-center ">	

			<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><h1 class="Cabin-Sketch naranja"> Proyecto Final Estadistica 2 </h1></div>
  <div class="panel-body">
    <div class="col-md-12 center-block quitar-float text-center quitar-arriba espacio-abajo fuente"> 
		<img src="imgs/umglogo.png">
		
		<h2 class="naranja"> <a href="https://www.umg.edu.gt/">UMG</a> </h2>
		<h3 class="naranja"> San josé Pinula Sección A </h3>
	</div>
  </div>
</div>
	
	<div class="panel panel-info visible-sm visible-xs">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Registarse </div>
	  <div class="panel-body">
	    <form action="#" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre: ">
				<label for="correo">Correo:</label>
				<input type="text" name="correo" id="correo" class="form-control" placeholder="Correo: ">
				<label for="clave">Contraseña:</label>
				<input type="text" name="clave" id="clave" class="form-control" placeholder="Contraseña: ">
			</div>
		<button class="btn btn-primary" onclick="alerta()"> Registrarse</button>
	</form>
	  </div>
	</div>
	<div class="panel panel-primary visible-xs visible-sm">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Iniciar Sesión </div>
	  <div class="panel-body">
	    <form action="php/loguin.php" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="correo">Correo:</label>
				<input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario: ">
				<label for="clave">Contraseña:</label>
				<input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña: ">
			</div>
		<button class="btn btn-success" onclick="pacman.html"> Iniciar Sesión</button>
	</form>
	  </div>
	</div>

			
			

		</article>

		
	</section>
	<aside class="col-md-3 hidden-xs hidden-sm text-justify">

  	
  	<div class="panel panel-info">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Registarse </div>
	  <div class="panel-body">
	    <form action="loguin.<?php  ?>" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre: ">
				<label for="correo">Correo:</label>
				<input type="text" name="correo" id="correo" class="form-control" placeholder="Correo: ">
				<label for="clave">Contraseña:</label>
				<input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña: ">
			</div>
		<button class="btn btn-primary" onclick="alerta()"> Registrarse</button>
	</form>
	  </div>
	</div>
	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	   <div class="panel-heading">Iniciar Sesión </div>
	  <div class="panel-body">
	    <form action="php/loguin.php" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="correo">Correo:</label>
				<input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario: ">
				<label for="clave">Contraseña:</label>
				<input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña: ">
			</div>
		<button class="btn btn-success" onclick="pacman.html"> Iniciar Sesión</button>
	</form>
	  </div>
	</div>

	


  	
  </aside>
	</section>
	<footer class="container bg-primary">
    	<p class="text-center">DERECHOS RESERVADOS &copy; 2017 <a href="http://norellana.hol.es/" class="text-blanco">Nery AlexisOrellana Cuy</a></p>
	</footer> 
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>
	
</body>
</html>