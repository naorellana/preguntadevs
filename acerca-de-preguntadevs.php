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
	<title> Nery Alexis Orellana Cuy</title> <!-- -->
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
		header("location:index.html");
	}
	
 ?>
<body class="">
	<div class="container-fluid ">  
		<header>  <!-- barra de navegacion  -->
			<nav class=" navbar navbar-default navbar-fixed-top navbar-inverse"> 
				<div class="container-fluid">
					<div class="navbar-header "> 
						<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
							<span class="sr-only"></span>
							<span class="glyphicon glyphicon-th-list"></span> <!-- usando un icono para que muestre como menu-->
							<span class="icon-bar"></span> 
						</button>
						<a href="bienvenida.php" class="navbar-brand">< ? PREGUNTADEVS ?></a> 
					</div>
					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							<li><a href="acerca-de-preguntadevs.php"> <span class="glyphicon glyphicon-info-sign visible-xs"> Acerca De </span> <span class="visible-sm visible-md visible-lg">  Acerca De</span> </a></li>
							<li>
								<a class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-extended="true"><span class="glyphicon glyphicon-user visible-xs"> <?php echo $_SESSION["sessionUsuario"];	 ?> </span> <span class="visible-sm visible-md visible-lg">  <?php echo $_SESSION["sessionUsuario"];	 ?> <span class="caret"></span> </span>
				<!-- icono del trianguilito-->
			</a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"> <!--lista de elemnetos -->
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

			<div class="panel panel-primary justify">
  <!-- Default panel contents -->
  <div class="panel-heading"><h1>SOBRE NOSOTROS</h1> </div>
  <div class="panel-body">
   <div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <img  class="avatar thumbnail img-responsive  " src="imgs/PREGUNTADEVS.png"
      <div class="caption">
        <h2>Acerca de PREGUNTADEVS</h2> <br>
        <span class="glyphicon glyphicon-wrench texto-grande"> En Mantenimiento...</span> <span class="texto-grande glyphicon glyphicon-wrench">
      </div>
    </div>
  </div>
  </div>
</div>
			
			


			
			<div class="row visible-xs visible-sm">
				<article class="text-center bg-primary espacio-arriba container-fluid ">
			<div class="bg-info row ">
				<a href="https://mobile.facebook.com/alexis.orellana2?ref=bookmarks"> <img src="imgs/rs/Facebook.png" class="col-xs-3 "> </a>
				<a href="https://twitter.com/all_exis?s=09"> <img src="imgs/rs/Twitter-Bird.png" class="col-xs-3 quitar-float "> </a>
				<a href="https://github.com/naorellana"> <img src="imgs/rs/Github.png" class="col-xs-3 quitar-float "> </a> 
				<a href="https://www.linkedin.com/in/nery-alexis-orellana-cuy-3612888b/"> <img src="imgs/rs/Linkedin.png" class="col-xs-3 quitar-float "> </a> 
				
			</div>

		</article>
		<p class="visible-sm visible-xs bg-info">Escríbeme a: <a href="mailto:alexis_oc@yahoo.es">alexis_oc@yahoo.es</a></p>
			</div>

		</article>

		
	</section>
	<aside class="col-md-3 hidden-xs hidden-sm text-justify">

  	
  	<div class="list-group">
  		<h4 class="list-group-item active">Sígueme  </h4>
  		<a href="https://mobile.facebook.com/alexis.orellana2?ref=bookmarks" class="list-group-item ">Facebook</a>
  		<a href="https://twitter.com/all_exis?s=09" class="list-group-item">Twitter</a>
  		<a href="https://www.linkedin.com/in/nery-alexis-orellana-cuy-3612888b/" class="list-group-item">Linkedin</a>
  		<a href="https://github.com/naorellana" class="list-group-item">Github</a>
  	</div>
	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Escríbeme </div>
	  <div class="panel-body">
	    <form action="php/email.php" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre: ">
				<label for="correo">Correo:</label>
				<input type="text" name="correo" id="correo" class="form-control" placeholder="Correo: ">
				<label for="mensaje">Mensaje:</label>
				<textarea class="form-control" name="mensaje	" id="mensaje" placeholder="Escribe Tu Mensaje:"></textarea>
				<label for="opcion">Motivo Del Mensaje</label>
				<select class="form-control" name="opcion" id="opcion"> <!-- form-control sirve para select, textarea, input-->
					<option value="Comentario">Comentario</option>
					<option value="Solicitud">Solicitud</option>
					<option value="Consulta">Consulta</option>
				</select>
			</div>
		<button class="btn btn-primary" onclick="alerta()"> Enviar</button>
	</form>
	  </div>
	</div>



  	
  </aside>
	</section>
	<footer class="container bg-primary">
    	<p class="text-center">DERECHOS RESERVADOS &copy; 2017 <a href="http://norellana.hol.es/" class="text-blanco">Nery Alexis Orellana Cuy</a></p>
	</footer> 
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>
	
</body>
</html>