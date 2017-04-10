
<?php 
	session_start();
	if (!isset($_SESSION["sessionUsuario"])){
		header("location:index.html");
	}
	$USUARIO=$_SESSION["sessionUsuario"];
	$p1= $_GET["1"];
	$p2= $_GET["2"];
	$p3= $_GET["3"];
	$p4= $_GET["4"];
	$p5= $_GET["5"];
	$p6= $_GET["6"];
	$p7= $_GET["7"];
	$p8= $_GET["8"];
	$p9= $_GET["9"];
	$p10= $_GET["10"];
	$r1= $_GET["11"];
	$r2= $_GET["12"];
	$r3= $_GET["13"];
	$r4= $_GET["14"];
	$r5= $_GET["15"];
	$r6= $_GET["16"];
	$r7= $_GET["17"];
	$r8= $_GET["18"];
	$r9= $_GET["19"];
	$r10= $_GET["20"];
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
 ?>