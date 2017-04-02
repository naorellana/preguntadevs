<?php 
$idRecibido=$_GET["usuarioId"];
$sentenciaSQL="DELETE FROM dbpreguntadevs.tbusuarios WHERE usuarioId='$idRecibido'; ";
require_once("conectarModelo.php");
$base=Conectar::conexion();
$base->query($sentenciaSQL);
#echo $sentenciaSQL;
header("location:../bienvenida.php")
 ?>
