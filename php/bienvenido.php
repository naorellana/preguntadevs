<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
	session_start();
	if (!isset($_SESSION["sessionUsuario"])){
		header("location:/preguntadevs/");
	}
	
 ?>
<body>

	<h1>Bienvenidos usuarios HOla Loguin</h1>
	<?php 
		echo "Bienvenido: ". $_SESSION["sessionUsuario"];
	 ?>
</body>
</html>