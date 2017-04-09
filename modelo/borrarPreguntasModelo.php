<?php 
$idRecibido=$_GET["usuarioId"];
$sentenciaSQL="DELETE FROM TBPERSONA WHERE USUARIO='$idRecibido'; ";
#$sentenciaSQL="DELETE FROM dbpreguntadevs.TBPERSONA WHERE USUARIO='$idRecibido'; ";
require_once("conectarModelo.php");
$base=Conectar::conexion();
$base->query($sentenciaSQL);
#echo $sentenciaSQL;
header("location:../bienvenida.php")
 ?>
