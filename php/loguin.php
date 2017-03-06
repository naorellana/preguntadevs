<?php 
	try {
		$base= new PDO("mysql:host=mysql.hostinger.es; dbname=dbpreguntadevs" ,"u726364151_admin", "1005huevon");
		$base-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$sql="SELECT * FROM tbusuarios WHERE usuarioId= :usuario AND claveSeguridad= :clave";
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
			header("location:/preguntadevs/bienvenido.php");
		}else{
			header("location:/preguntadevs/");
		}

		
	} catch (Exception $e) {
		echo "string";
		die("Error: " . $e->getMessage() );
	}
 ?>