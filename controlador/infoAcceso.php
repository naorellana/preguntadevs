
<?php 
require_once("../modelo/conectarModelo.php");
$correo=$_POST["mail"];
$base=Conectar::conexion();
#$base->query($sentenciaSQL);
$consulta="SELECT USUARIO, CONTRASENA FROM TBPERSONA where CORREO=\"$correo\";";
#$consulta="SELECT USUARIO, CONTRASENA FROM dbpreguntadevs.tbpersona where CORREO=\"$correo\";";
foreach ($base->query($consulta) as $dato) {
	
    }
    if ($dato['USUARIO']!="") {
    	$mensaje="Gracias Por Contactarnos :) \n
    	Su informacion de acceso es: \n \n
    	Usuario: ".$dato['USUARIO'] ."\n
    	Contraseña: ".$dato["CONTRASENA"];
    	#echo $mensaje;
    	mail($correo, "Recuperación De Contraseña", $mensaje);
    }else{
    	$mensaje="Correo No Registrado: \n Por Favor Registrate en: http://umgproyectos.hol.es/vista/agregarUsuario.php";
    	mail($correo, "Recuperación De Contraseña", $mensaje);   
    	 }
    	 #echo $mensaje;
    	 header("location:../index.html");
 ?>