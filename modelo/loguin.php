<?php 
require_once("conectarModelo.php");
$base=Conectar::conexion();
$sql="SELECT * FROM TBPERSONA WHERE USUARIO= :usuario AND CONTRASENA= :clave";
$sql="SELECT * FROM dbpreguntadevs.tbpersona WHERE USUARIO= :usuario AND CONTRASENA= :clave";
		$resultado=$base->prepare($sql);
		$usuario=htmlentities(addcslashes($_POST["usuario"],''));
		$clave=htmlentities(addcslashes($_POST["clave"],''));
		$resultado-> bindValue(":usuario", $usuario);
		$resultado-> bindValue(":clave", $clave);
		$resultado-> execute ();
		$numero_columnas=$resultado-> rowCount();
		if ($numero_columnas!=0){
			session_start();
			$_SESSION["sessionUsuario"]=$_POST["usuario"];
			header("location:../bienvenida.php");
			$base->query("INSERT INTO dbpreguntadevs.bitlogueos (`USUARIO`, `FECHA`, `ACCION`) VALUES ('$usuario',NOW(), 2)");
		}else{
			header("location:../index.html");
		}
 ?>