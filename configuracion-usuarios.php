<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="icon" type="image/png" href="imgs/PREGUNTADEVS.png" />
	<link href='https://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>
	<title> Configuraciones De Usuario</title> <!-- -->
	<style type="text/css">
		body{
			padding-top: 20px; <!-- tamaño de la barra de navegacion es de 80 px-->
		}
	</style>
	
</head>
<script type="text/javascript">
function alerta() {
alert("¡Gracias Por Contactarnos!");}
function alertaTest() {
alert("¡Tus respuestas fueron enviadas!");}
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
				<li><a href="configuracion-usuarios.php"> <span class="glyphicon glyphicon-user visible-xs"> Configuracion </span> <span class="visible-sm visible-md visible-lg">  Configuracion</span> </a></li>
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

	
	<?php 
	$USUARIO=$_SESSION["sessionUsuario"];
		if (!isset($_POST["guardar"])){
			require_once("modelo/conectarModelo.php");
				$base=Conectar::conexion();
				#$base->query($sentenciaSQL);
				$consulta="SELECT * FROM TBPERSONA"; #HOSTINGER
				#$consulta="SELECT * FROM dbpreguntadevs.TBPERSONA WHERE USUARIO='$USUARIO'"; #localhost
				$dato="";
				foreach ($base->query($consulta) as $dato) {
					
				    }
			$CORREO =trim($dato["CORREO"]);
			$NOMBRE1=trim($dato["NOMBRE1"]);
			$NOMBRE2=trim($dato["NOMBRE2"]);
			$APELLIDO1=trim($dato["APELLIDO1"]);
			$APELLIDO2= trim($dato["APELLIDO2"]);
			$PAIS= trim($dato["PAIS"]);
			$FECHANAC= trim($dato["FECHANAC"]);
			$USUARIO= trim($dato["USUARIO"]);
			$CONTRASENA= trim($dato["CONTRASENA"]);

		}else{
			$CORREO =trim($_GET["CORREO"]);
			$NOMBRE1=trim($_GET["NOMBRE1"]);
			$NOMBRE2=trim($_GET["NOMBRE2"]);
			$APELLIDO1=trim($_GET["APELLIDO1"]);
			$APELLIDO2= trim($_GET["APELLIDO2"]);
			$PAIS= trim($_GET["PAIS"]);
			$FECHANAC= trim($_GET["FECHANAC"]);
			$USUARIO= trim($_GET["USUARIO"]);
			$CONTRASENA= trim($_GET["CONTRASENA"]);
			$sentenciaSQL="UPDATE dbpreguntadevs.TBPERSONA SET `CORREO`='".$usuarioId."',`NOMBRE1`='".$NOMBRE1."',`NOMBRE2`='".$NOMBRE2 ."',`APELLIDO1`='".$APELLIDO1."',`APELLIDO2`='".$APELLIDO2."',`PAIS`='".$PAIS."' WHERE dbpreguntadevs.TBPERSONA.`USUARIO`='".$USUARIOUSUARIO ."';";
echo $sentenciaSQL;
require_once("../modelo/conectarModelo.php");
$base=Conectar::conexion();
#$base->query($sentenciaSQL);
		}
			echo "<div class=\"panel panel-primary visible-xs visible-sm\">
		
	  <!-- Default panel contents -->
	   <div class=\"panel-heading\">Editar Información </div>
	  <div class=\"panel-body\">
	    <form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">
			<div class=\"form-group\"> <!-- agrupa los elementos y deja un espaciado-->
				<label for=\"CORREO\" class=\"hidden\">usuarioid:</label>
				<input type=\"text\" name=\"CORREO\" id=\"CORREO\" class=\"form-control hidden\" value='".$CORREO."' placeholder=\"". $CORREO."\">
				<label for=\"NOMBRE1\">nombre1:</label>
				<input type=\"text\" name=\"NOMBRE1\" id=\"NOMBRE1\" class=\"form-control\" placeholder=\"".$NOMBRE1." \" value='".$NOMBRE1."'>
				<label for=\"NOMBRE2\">nombre2:</label>
				<input type=\"text\" name=\"NOMBRE2\" id=\"NOMBRE2\" class=\"form-control\" placeholder=\"". $NOMBRE2." \" value= \"".$NOMBRE2."\">
				<label for=\"APELLIDO1\">apellido1:</label>
				<input type=\"text\" name=\"APELLIDO1\" id=\"APELLIDO1\" class=\"form-control\" placeholder=\"". $APELLIDO1." \" value= \"".$APELLIDO1."\">
				<label for=\"APELLIDO2\">apellido2:</label>
				<input type=\"text\" name=\"apellido2\" id=\"APELLIDO2\" class=\"form-control\" placeholder=\"". $APELLIDO2." \" value=\"".$APELLIDO2."\">
				<label for=\"PAIS\">PAIS:</label>
				<input type=\"text\" name=\"PAIS\" id=\"PAIS\" class=\"form-control\" placeholder=\"". $PAIS." \" value=\"".$PAIS."\">
				<label for=\"FECHANAC\">FECHANAC:</label>
				<input type=\"text\" name=\"FECHANAC\" id=\"FECHANAC\" class=\"form-control\" placeholder=\"". $FECHANAC." \" value=\"".$FECHANAC."\">
				<label for=\"CONTRASENA\">CONTRASENA:</label>
				<input type=\"password\" name=\"CONTRASENA\" id=\"CONTRASENA\" class=\"form-control\" placeholder=\"". $CONTRASENA." \" value=\"".$CONTRASENA."\">
			</div>
		<button name=\"guardar\" id=\"guardar\" class=\"btn btn-success\" onclick=\"../modelo/comandosql.php\"> Guardar</button>
	</form>
		   
	  </div>

	</div>";
	echo "<td> <a href='modelo/borrarRegistrosModelo.php?usuarioId=". $USUARIO . "' > <button class='btn btn-danger visible-xs visible-sm'> Eliminar Cuenta</button> </a>  </td> <br> <br>";

	
	
		 ?>




  
</div>
	<div class="row">
		<div class="">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>% DE USUARIO</h3>
      <div class="caption bg-info">
        <span class="glyphicon glyphicon-user"></span>
        <p>... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse ipsa, inventore dolores, cupiditate earum. Nobis et, esse earum. Aliquam placeat quidem, nesciunt perferendis cupiditate recusandae explicabo harum a modi.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
<div class="">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>% RESPUESTAS CORRECCTAS</h3>
      <div class="caption bg-success">
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <p>... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse ipsa, inventore dolores, cupiditate earum. Nobis et, esse earum. Aliquam placeat quidem, nesciunt perferendis cupiditate recusandae explicabo harum a modi.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
<div class="">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>% RESPUESTAS ERRONEAS</h3>
      <div class="caption bg-danger">
        <span class="glyphicon glyphicon-thumbs-down"></span>
        <p>... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse ipsa, inventore dolores, cupiditate earum. Nobis et, esse earum. Aliquam placeat quidem, nesciunt perferendis cupiditate recusandae explicabo harum a modi.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
	</div>
	
<?php
if (isset($_POST["generar"])){
		$N=trim( $_POST["NIVELT"]);
		$e=trim( $_POST["ETIQUETAT"]);
		require_once("modelo/preguntaModelo.php");
$registros=new Preguntas_modelo();
$matrizRegistros=$registros->getRegistros($N,$e);	
require_once("vista/preguntasVista.php");

			}
		echo "<div class=\"panel panel-primary\">
		
	  <!-- Default panel contents -->
	   <div class=\"panel-heading\"> Nuevo Test </div>
	  <div class=\"panel-body\">
	    <form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">
			<div class=\"form-group\"> <!-- agrupa los elementos y deja un espaciado-->
				<label for=\"NIVELT\">*NIVEL :</label>
				<select name=\"NIVELT\" id=\"NIVELT\" class=\"form-control\">";
				require_once("modelo/conectarModelo.php");
				$base=Conectar::conexion();
				#$base->query($sentenciaSQL);
				$consulta="SELECT IDNIVEL, NIVEL FROM NIVEL"; #HOSTINGER
				#$consulta="SELECT IDNIVEL, NIVEL FROM dbpreguntadevs.NIVEL"; #localhost
				$dato="";
				foreach ($base->query($consulta) as $dato) {
					echo "<option value=\"".$dato['IDNIVEL']."\">".$dato['NIVEL']."</option>";
				    }	
				echo "</select>
				<label for=\"ETIQUETAT\">*ETIQUETA O CATEGORIA:</label>
				<select name=\"ETIQUETAT\" id=\"ETIQUETAT\" class=\"form-control\">";
				$consulta="SELECT IDETIQUETA, ETIQUETA FROM ETIQUETAS"; #HOSTINGER
				#$consulta="SELECT IDETIQUETA, ETIQUETA FROM dbpreguntadevs.ETIQUETAS"; #localhost
				$dato="";
				foreach ($base->query($consulta) as $dato) {
					echo "<option value=\"".$dato['IDETIQUETA']."\">".$dato['ETIQUETA']."</option>";
				    }	

				echo "</select>
			</div>
		<button name=\"generar\" id=\"generar\" class=\"btn btn-success\" onclick=\"\"> generar</button>  
	</form>
	  </div>
	</div>";
	 ?>	  <!-- llama a la tabla ya con datos y estilos desde vista/tablaVista.php -->




			
			

		</article>

		
	</section>
	<aside class="col-md-3 hidden-xs hidden-sm text-justify">

	<?php 
	$USUARIO=$_SESSION["sessionUsuario"];
		if (!isset($_POST["guardar"])){
			require_once("modelo/conectarModelo.php");
				$base=Conectar::conexion();
				#$base->query($sentenciaSQL);
				$consulta="SELECT * FROM TBPERSONA"; #HOSTINGER
				#$consulta="SELECT * FROM dbpreguntadevs.TBPERSONA WHERE USUARIO='$USUARIO'"; #localhost
				$dato="";
				foreach ($base->query($consulta) as $dato) {
					
				    }
			$CORREO =trim($dato["CORREO"]);
			$NOMBRE1=trim($dato["NOMBRE1"]);
			$NOMBRE2=trim($dato["NOMBRE2"]);
			$APELLIDO1=trim($dato["APELLIDO1"]);
			$APELLIDO2= trim($dato["APELLIDO2"]);
			$PAIS= trim($dato["PAIS"]);
			$FECHANAC= trim($dato["FECHANAC"]);
			$USUARIO= trim($dato["USUARIO"]);
			$CONTRASENA= trim($dato["CONTRASENA"]);

		}else{
			$CORREO =trim($_GET["CORREO"]);
			$NOMBRE1=trim($_GET["NOMBRE1"]);
			$NOMBRE2=trim($_GET["NOMBRE2"]);
			$APELLIDO1=trim($_GET["APELLIDO1"]);
			$APELLIDO2= trim($_GET["APELLIDO2"]);
			$PAIS= trim($_GET["PAIS"]);
			$FECHANAC= trim($_GET["FECHANAC"]);
			$USUARIO= trim($_GET["USUARIO"]);
			$CONTRASENA= trim($_GET["CONTRASENA"]);
			$sentenciaSQL="UPDATE dbpreguntadevs.TBPERSONA SET `CORREO`='".$usuarioId."',`NOMBRE1`='".$NOMBRE1."',`NOMBRE2`='".$NOMBRE2 ."',`APELLIDO1`='".$APELLIDO1."',`APELLIDO2`='".$APELLIDO2."',`PAIS`='".$PAIS."' WHERE dbpreguntadevs.TBPERSONA.`USUARIO`='".$USUARIOUSUARIO ."';";
echo $sentenciaSQL;
require_once("../modelo/conectarModelo.php");
$base=Conectar::conexion();
#$base->query($sentenciaSQL);
		}
			echo "<div class=\"panel panel-primary\">
		
	  <!-- Default panel contents -->
	   <div class=\"panel-heading\">Editar Información </div>
	  <div class=\"panel-body\">
	    <form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">
			<div class=\"form-group\"> <!-- agrupa los elementos y deja un espaciado-->
				<label for=\"CORREO\" class=\"hidden\">usuarioid:</label>
				<input type=\"text\" name=\"CORREO\" id=\"CORREO\" class=\"form-control hidden\" value='".$CORREO."' placeholder=\"". $CORREO."\">
				<label for=\"NOMBRE1\">nombre1:</label>
				<input type=\"text\" name=\"NOMBRE1\" id=\"NOMBRE1\" class=\"form-control\" placeholder=\"".$NOMBRE1." \" value='".$NOMBRE1."'>
				<label for=\"NOMBRE2\">nombre2:</label>
				<input type=\"text\" name=\"NOMBRE2\" id=\"NOMBRE2\" class=\"form-control\" placeholder=\"". $NOMBRE2." \" value= \"".$NOMBRE2."\">
				<label for=\"APELLIDO1\">apellido1:</label>
				<input type=\"text\" name=\"APELLIDO1\" id=\"APELLIDO1\" class=\"form-control\" placeholder=\"". $APELLIDO1." \" value= \"".$APELLIDO1."\">
				<label for=\"APELLIDO2\">apellido2:</label>
				<input type=\"text\" name=\"apellido2\" id=\"APELLIDO2\" class=\"form-control\" placeholder=\"". $APELLIDO2." \" value=\"".$APELLIDO2."\">
				<label for=\"PAIS\">PAIS:</label>
				<input type=\"text\" name=\"PAIS\" id=\"PAIS\" class=\"form-control\" placeholder=\"". $PAIS." \" value=\"".$PAIS."\">
				<label for=\"FECHANAC\">FECHANAC:</label>
				<input type=\"text\" name=\"FECHANAC\" id=\"FECHANAC\" class=\"form-control\" placeholder=\"". $FECHANAC." \" value=\"".$FECHANAC."\">
				<label for=\"CONTRASENA\">CONTRASENA:</label>
				<input type=\"password\" name=\"CONTRASENA\" id=\"CONTRASENA\" class=\"form-control\" placeholder=\"". $CONTRASENA." \" value=\"".$CONTRASENA."\">
			</div>
		<button name=\"guardar\" id=\"guardar\" class=\"btn btn-success\" onclick=\"../modelo/comandosql.php\"> Guardar</button>
	</form>
		   
	  </div>

	</div>";
	echo "<td> <a href='modelo/borrarRegistrosModelo.php?usuarioId=". $USUARIO . "' > <button class='btn btn-danger'> Eliminar Cuenta</button> </a>  </td> <br> <br>";

	
	
		 ?>


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
			$sentenciaSQL="INSERT INTO dbpreguntadevs.PREGUNTAS (`IDPREGUNTA`, `PREGUNTA`, `RESPA`, `RESPB`, `RESPC`, `RESPCORRECTA`, `USUARIO`, `NIVEL`, `ETIQUETA`) 
			VALUES (0,'".$PREGUNTA."','". $RESPA."','". $RESPB ."','". $RESPC."',". $RESPCORRECTA.",'". $USUARIO."',". $NIVEL.",". $ETIQUETA.");";
echo $sentenciaSQL;
require_once("modelo/conectarModelo.php");
$base=Conectar::conexion();
$base->query($sentenciaSQL);

	

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
				require_once("modelo/conectarModelo.php");
				$base=Conectar::conexion();
				#$base->query($sentenciaSQL);
				$consulta="SELECT IDNIVEL, NIVEL FROM NIVEL"; #HOSTINGER
				#$consulta="SELECT IDNIVEL, NIVEL FROM dbpreguntadevs.NIVEL"; #localhost
				$dato="";
				foreach ($base->query($consulta) as $dato) {
					echo "<option value=\"".$dato['IDNIVEL']."\">".$dato['NIVEL']."</option>";
				    }	
				echo "</select>
				<label for=\"ETIQUETA\">*ETIQUETA O CATEGORIA:</label>
				<select name=\"ETIQUETA\" id=\"ETIQUETA\" class=\"form-control\">";
				$consulta="SELECT IDETIQUETA, ETIQUETA FROM ETIQUETAS"; #HOSTINGER
				#$consulta="SELECT IDETIQUETA, ETIQUETA FROM dbpreguntadevs.ETIQUETAS"; #localhost
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

	


  	
  </aside>
	</section>
	<footer class="container bg-primary">
    	<p class="text-center">DERECHOS RESERVADOS &copy; 2017 <a href="http://norellana.hol.es/" class="text-blanco">Nery Alexis Orellana Cuy</a></p>
	</footer>  
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>
	
</body>
</html>