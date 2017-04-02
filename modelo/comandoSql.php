<?php 
require_once("conectarModelo.php");
$base=Conectar::conexion();
#echo $idRecibido;
echo "Dato1: ".$dato1;
#$sentenciaSQL="DELETE FROM dbpreguntadevs.tbusuarios WHERE usuarioId='$idRecibido' ";
$sentenciaSQL="UPDATE 'tbusuarios' SET 'usuarioId'='".$dato1 ."','nombre1'='".$dato2 ."','nombre2'='".$dato3 ."','apellido1'='".$dato4 ."','apellido2'='".$dato5 ."','claveSeguridad'='".$dato6 ."' WHERE 'tbusuarios'.'usuarioId' = '".$dato1 ."';";
echo $sentenciaSQL;
#$base->query($sentenciaSQL);
#header("location:index.php")
 ?>}