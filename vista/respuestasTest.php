<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  	<link rel="icon" type="image/png" href="../imgs/PREGUNTADEVS.png" />
	<link href='https://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/bootstrap.min.js" ></script>
	<script src="../js/jquery.js" ></script>
	<title> Configuraciones De Usuario</title> <!-- -->
	<style type="text/css">
		body{
			padding-top: 20px; <!-- tamaño de la barra de navegacion es de 80 px-->
		}

		.text-enorme{
			font-size: 80px;
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
	<section class="container-fluid">
		<section class=" col-md-12">
		<article class=" text-center ">	

	
	<?php 
	
	$USUARIO=$_SESSION["sessionUsuario"];
	$r1= $_GET["1"];
	$r2= $_GET["2"];
	$r3= $_GET["3"];
	$r4= $_GET["4"];
	$r5= $_GET["5"];
	$r6= $_GET["6"];
	$r7= $_GET["7"];
	$r8= $_GET["8"];
	$r9= $_GET["9"];
	$r10= $_GET["10"];
	$p1= $_GET["11"];
	$p2= $_GET["12"];
	$p3= $_GET["13"];
	$p4= $_GET["14"];
	$p5= $_GET["15"];
	$p6= $_GET["16"];
	$p7= $_GET["17"];
	$p8= $_GET["18"];
	$p9= $_GET["19"];
	$p10= $_GET["20"];
	$rc1= $_GET["21"];
	$rc2= $_GET["22"];
	$rc3= $_GET["23"];
	$rc4= $_GET["24"];
	$rc5= $_GET["25"];
	$rc6= $_GET["26"];
	$rc7= $_GET["27"];
	$rc8= $_GET["28"];
	$rc9= $_GET["29"];
	$rc10= $_GET["30"];
	/*echo $p1.$r1.$rc1. "<br>";
	echo $p2.$r2.$rc2."<br>";
	echo $p3.$r3 .$rc3 ."<br>";
	echo $p4.$r4.$rc4. "<br>";
	echo $p5.$r5 .$rc5 ."<br>";
	echo $p6.$r6 .$rc6 ."<br>";
	echo $p7.$r7 .$rc7 ."<br>";
	echo $p8.$r8 .$rc8 ."<br>";
	echo $p9.$r9 .$rc9 ."<br>";
	echo $p10.$r10.$rc10. "<br>";
	echo $USUARIO;*/

	$puntos=0;
	if ($rc1==$r1){
		$puntos++;
	}

	if ($rc2==$r2){
		$puntos++;
	}

	if ($rc3==$r3){
		$puntos++;
	}

	if ($rc4==$r4){
		$puntos++;
	}

	if ($rc5==$r5){
		$puntos++;
	}

	if ($rc6==$r6){
		$puntos++;
	}

	if ($rc7==$r7){
		$puntos++;
	}

	if ($rc8==$r8){
		$puntos++;
	}

	if ($rc9==$r9){
		$puntos++;
	}

	if ($rc10==$r10){
		$puntos++;
	}
	$color="";
	if ($puntos<5) {
		$color="danger";
	} elseif ($puntos<8) {
		$color="warning";
	}
	elseif ($puntos>=8) {
		$color="success";
	}
#echo "puntos: ".$puntos;

	require_once("../modelo/conectarModelo.php");
				$base=Conectar::conexion();
				/*echo("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`, `USUARIO`, `FECHA`) VALUES 
					($p1,$r1, $rc1, '$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p2,$r2, $rc2, '$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p3,$r3,$rc3, '$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p4,$r4,$rc4, '$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p5,$r5,$rc5,'$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p6,$r6,$rc6,'$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p7,$r7,$rc7,'$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p8,$r8,$rc8,'$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p9,$r9,$rc9,'$USUARIO', now());");
				echo("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `RESPCO`, `USUARIO`, `FECHA`) VALUES 
					($p10,$r10,$rc10,'$USUARIO', now());");

				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p1,$r1,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p2,$r2,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p3,$r3,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p4,$r4,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p5,$r5,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p6,$r6,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p7,$r7,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p8,$r8,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p9,$r9,'$USUARIO', now());");
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
					($p10,$r10,'$USUARIO', now());");
				#$base->query($sentenciaSQL);*/
				$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`, `USUARIO`, `FECHA`) VALUES 
					($p1,$r1, $rc1, '$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p2,$r2, $rc2, '$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p3,$r3,$rc3, '$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p4,$r4,$rc4, '$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p5,$r5,$rc5,'$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p6,$r6,$rc6,'$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p7,$r7,$rc7,'$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p8,$r8,$rc8,'$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`,  `USUARIO`, `FECHA`) VALUES 
					($p9,$r9,$rc9,'$USUARIO', now());");
				$base->query("INSERT INTO  dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `RESPCO`, `USUARIO`, `FECHA`) VALUES 
					($p10,$r10,$rc10,'$USUARIO', now());");

				$consulta="SELECT COUNT(*) FROM dbpreguntadevs.bitpreguntas WHERE USUARIO='norellanac' and RESPENVIADA=RESPCO";
				foreach ($base->query($consulta) as $dato) {
	
    }
				#echo $dato['COUNT(*)'];
				echo "<div class=\"panel panel-$color\">
  <div class=\"panel-heading\">RESULTADO DEL TEST </div>
  <div class=\"panel-body \">
    <span class=\"glyphicon glyphicon-check text-enorme\"></span>
        <p class='text-enorme'> Puntuación: <br> </p>
        <h1><span class=\"label label-$color text-enorme\">$puntos / 10 </h1></span>
        <br>
        <br>
		<a href=\"../bienvenida.php\"> <button class=\"btn btn-$color\">Continuar...</button></a>
  </div>
</div>";




 ?>


  
</div>





			
			

		</article>

		
	</section>
	<aside class="col-md-3 hidden-xs hidden-sm text-justify">

	
	


  	
  </aside>
	<!--</section>
	<footer class="container bg-primary">
    	<p class="text-center">DERECHOS RESERVADOS &copy; 2017 <a href="http://norellana.hol.es/" class="text-blanco">Nery Alexis Orellana Cuy</a></p>
	</footer>  -->
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>
	
</body>
</html>