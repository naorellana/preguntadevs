<?php 
	session_start();
	session_destroy();
	require_once("../modelo/conectarModelo.php");
	$usuario=$_SESSION["sessionUsuario"];
$base=Conectar::conexion();
$base->query("INSERT INTO dbpreguntadevs.bitlogueos (`USUARIO`, `FECHA`, `ACCION`) VALUES ('$usuario',NOW(), 3)");
	header("location:../index.html")
 ?>