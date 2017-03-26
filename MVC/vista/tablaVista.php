<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC PHP</title>
</head>
<body>
<table>
	<tr><td>Nombre</td>	</tr>
	<?php
		#require_once("controlador/tablaControlador.php");
		foreach ($matrizRegistros as $linea) {
		 	echo "<tr><td>". $linea["nombre1"] . "</td>	</tr>";
		 } 
	 ?>
</table>
	
</body>
</html>