<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Vista</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../imgs/umglogo.png" />
  <link href='https://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/style.css">

  <script src="../js/bootstrap.min.js" ></script>
  <script src="../js/jquery.js" ></script> <!-- -->
  <style type="text/css">
    body{
      padding-top: 20px; <!-- tamaño de la barra de navegacion es de 80 px-->
    }
  </style>
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
</head>
<body>


<body class="">
	<div class="container-fluid">  
		<header class="hidden">  <!-- barra de navegacion  -->
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

		<?php 

		if (isset($_POST["guardar"])){
			$PREGUNTA =trim( $_POST["PREGUNTA"]);
			$RESPA=trim($_POST["RESPA"]);
			$RESPB=trim($_POST["RESPB"]);
			$RESPC= trim($_POST["RESPC"]);
			$RESPCORRECTA= trim($_POST["RESPCORRECTA"]);
			$NIVEL= trim($_POST["NIVEL"]);
			$ETIQUETA= trim($_POST["ETIQUETA"]);
			$USUARIO= trim($_SESSION["sessionUsuario"]);
			#$sentenciaSQL="UPDATE dbpreguntadevs.tbusuarios SET `usuarioId`='".$usuarioId."',`nombre1`='".$nombre1."',`nombre2`='".$nombre2 ."',`apellido1`='".$apellido1."',`apellido2`='".$apellido2."',`claveSeguridad`='".$claveSeguridad."' WHERE dbpreguntadevs.tbusuarios.`usuarioId`='".$usuarioId ."';";
			#$sentenciaSQL="INSERT INTO dbpreguntadevs.tbusuarios(`usuarioId`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `claveSeguridad`) VALUES ('".$usuarioId."','".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$claveSeguridad."');";
			$sentenciaSQL="INSERT INTO PREGUNTAS (`IDPREGUNTA`, `PREGUNTA`, `RESPA`, `RESPB`, `RESPC`, `RESPCORRECTA`, `USUARIO`, `NIVEL`, `ETIQUETA`) 
			VALUES (0,'".$PREGUNTA."','". $RESPA."','". $RESPB ."','". $RESPC."',". $RESPCORRECTA.",'". $USUARIO."',". $NIVEL.",". $ETIQUETA.");";
echo $sentenciaSQL;
require_once("../modelo/conectarModelo.php");
$base=Conectar::conexion();
#$base->query($sentenciaSQL);

	

		}
			echo "<div class=\"panel panel-primary\">
		
	  <!-- Default panel contents -->
	   <div class=\"panel-heading\"> Agregar Pregunta </div>
	  <div class=\"panel-body\">
	    <form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">
			<div class=\"form-group\"> <!-- agrupa los elementos y deja un espaciado-->
				<label for=\"PREGUNTA\">*PREGUNTA:</label>
				<input type=\"text\" name=\"PREGUNTA\" id=\"PREGUNTA\" class=\"form-control\" placeholder=\"PREGUNTA\">
				<label for=\"RESPA\">* RESPUESTA A:</label>
				<input type=\"text\" name=\"RESPA\" id=\"RESPA\" class=\"form-control\" placeholder=\"RESPUESTA A\" '>
				<label for=\"RESPB\">*RESPUESTA B:</label>
				<input type=\"text\" name=\"RESPB\" id=\"RESPB\" class=\"form-control\" placeholder=\"RESPUESTA B\">
				<label for=\"RESPC\">*RESPUESTA C:</label>
				<input type=\"text\" name=\"RESPC\" id=\"RESPC\" class=\"form-control\" placeholder=\"RESPUESTA C\">
				<label for=\"RESPCORRECTA\">*RESPUESTA CORRECTA:</label>
				<select name=\"RESPCORRECTA\" id=\"RESPCORRECTA\" class=\"form-control\">
				  <option value=\"1\">A</option>
				  <option value=\"2\">B</option>
				  <option value=\"3\">C</option>
				</select>
				<label for=\"NIVEL\">*NIVEL PREGUNTA:</label>
				<select name=\"NIVEL\" id=\"NIVEL\" class=\"form-control\">";
				require_once("../modelo/conectarModelo.php");
				$base=Conectar::conexion();
				#$base->query($sentenciaSQL);
				$consulta="SELECT IDNIVEL, NIVEL FROM NIVEL"; #HOSTINGER
				#$consulta="SELECT IDNIVEL, NIVEL FROM dbpreguntadevs.NIVEL";
				$dato="";
				foreach ($base->query($consulta) as $dato) {
					echo "<option value=\"".$dato['IDNIVEL']."\">".$dato['NIVEL']."</option>";
				    }	
				echo "</select>
				<label for=\"ETIQUETA\">*ETIQUETA O CATEGORIA:</label>
				<select name=\"ETIQUETA\" id=\"ETIQUETA\" class=\"form-control\">";
				$consulta="SELECT IDETIQUETA, ETIQUETA FROM ETIQUETAS"; #HOSTINGER
				#$consulta="SELECT IDETIQUETA, ETIQUETA FROM dbpreguntadevs.ETIQUETAS";
				$dato="";
				foreach ($base->query($consulta) as $dato) {
					echo "<option value=\"".$dato['IDETIQUETA']."\">".$dato['ETIQUETA']."</option>";
				    }	
				echo "</select>
			</div>
		<button name=\"guardar\" id=\"guardar\" class=\"btn btn-success\" onclick=\"\"> Guardar</button>
	</form>
	  </div>
	</div>";

	
	
		 ?>

			


	
	<div class="panel panel-primary visible-xs visible-sm">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Iniciar Sesión </div>
	  <div class="panel-body">
	    <form action="../modelo/loguin.php" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="correo">Correo:</label>
				<input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario: ">
				<label for="clave">Contraseña:</label>
				<input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña: ">
			</div>
		<button class="btn btn-success" onclick=""> Iniciar Sesión</button>
	</form>
	  </div>
	</div>
	

			
			

		</article>

		
	</section>
	<aside class="col-md-3 hidden-xs hidden-sm text-justify">

  	
  	
	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	   <div class="panel-heading">Iniciar Sesión </div>
	  <div class="panel-body">
	    <form action="../modelo/loguin.php" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="correo">Correo:</label>
				<input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario: ">
				<label for="clave">Contraseña:</label>
				<input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña: ">
			</div>
		<button class="btn btn-success" onclick=""> Iniciar Sesión</button>
	</form>
	  </div>
	</div>

	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	   <div class="panel-heading">Recuperar Contraseña </div>
	  <div class="panel-body">
	    <form action="../controlador/infoAcceso.php" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="mail">Correo:</label>
				<input type="text" name="mail" id="mail" class="form-control" placeholder="correoregistrado@correo.com: ">
		<button class="btn btn-primary btn-sm	" onclick=""> Reccuperar</button>	
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