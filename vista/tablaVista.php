<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC PHP</title>
</head>
<body>
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Usuarios</div>

  <!-- Table -->
  <table class="table">
    <?php
		#require_once("controlador/tablaControlador.php");
		foreach ($matrizRegistros as $linea) {
		 	echo "<tr><td>". $linea["nombre1"] . "</td>	</tr>";
		 } 
	 ?>	
  </table>
</div>
<table class="table">
	
</table>
	
</body>
</html>