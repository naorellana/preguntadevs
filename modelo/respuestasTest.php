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
	echo $p1.$r1. "<br>";
	echo $p2.$r2."<br>";
	echo $p3.$r3 ."<br>";
	echo $p4.$r4. "<br>";
	echo $p5.$r5 ."<br>";
	echo $p6.$r6 ."<br>";
	echo $p7.$r7 ."<br>";
	echo $p8.$r8 ."<br>";
	echo $p9.$r9 ."<br>";
	echo $p10.$r10. "<br>";
	echo $USUARIO;
	require_once("../modelo/conectarModelo.php");
				$base=Conectar::conexion();
				echo("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`,`RESPCO`, `USUARIO`, `FECHA`) VALUES 
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

				/*$base->query("INSERT INTO dbpreguntadevs.bitpreguntas(`IDPREGUNTA`, `RESPENVIADA`, `USUARIO`, `FECHA`) VALUES 
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
				echo $dato['COUNT(*)'];




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="../bienvenida.php"> <button class="btn btn-primary">Volver</button></a>
	
</body>
</html>