<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC PHP</title>
</head>
<body>
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Usuarios  </div>
  
	

  <!-- Table -->
  <table class="table">
  <tr class="bg-info">
  	<td><b>Correo</b></td>
  	<td><b>Nombre</b></td>
  	<td><b>Segundo Nombre</b></td>
  	<td><b>Apellido</b></td>
	<td><b>Segundo Apellido</b></td>
	<td><b>Pais</b></td>
  	<td><b>Actualizar</b></td>
  	<td><b>Borrar</b></td>
  </tr>
    <?php
		#require_once("controlador/tablaControlador.php");
		foreach ($matrizRegistros as $lin1) {
			$dato1= $lin1["CORREO"];
			$dato2=$lin1["NOMBRE1"];
			$dato3= $lin1["NOMBRE2"];
			$dato4= $lin1["APELLIDO1"];
			$dato5= $lin1["APELLIDO2"];
			$dato6= $lin1["PAIS"];
			$dato7= $lin1["FECHANAC"];
			$dato8= $lin1["USUARIO"];
			$dato9= $lin1["CONTRASENA"];
		 	echo "<tr><td>". $dato1 . " </td>	";
		 	echo "<td>". $dato2 . "</td>	";
		 	echo "<td>". $dato3 . "</td>"; 
		 	echo "<td>". $dato4 . "</td>";
		 	echo "<td>". $dato5 . "</td>";
		 	echo "<td>". $dato8 . "</td>";
		 	#boton para modificar
		 	echo "<td> <a href='vista/editarUsuario.php?usuarioId=". $dato1 . " & nombre1= ". $dato2 . " & nombre2= ". $dato3 . " & apellido1= ". $dato4 . " & apellido2= ". $dato5 . " & claveSeguridad= ". $dato6 .   " ' > <button class='btn-warning'> Editar </button> </a>  </td>";
		 	#<td><button class='btn-primary'>Actualizar</button></td>";
		 	echo "<td> <a href='modelo/borrarRegistrosModelo.php?usuarioId=". $dato8 . "' > <button class='btn-danger'> Eliminar </button> </a>  </td>";
		 	#<td> <a href='modelo/borrarRegistrosModelo.php?id=". $dato3 . "' > <input type='button'> </a>  </td> ";
		 	
		 }
	 ?>	

	 <tr>
	<td></td>
		 			<td></td>
		 			<td>
      <a href="index.php" aria-label="Previous" class=" btn">
        <span aria-hidden="true">&laquo;</span>
      </a>
    	<?php 
		require_once("modelo/paginacion.php");
		for ($i=1; $i<=2; $i++) { 		#3 es para definir la cantidad de registros a mostrar en la paginacion
							echo "<a href='?pagina=". $i . "'class=' btn'>" .$i .  "</a> ";
						}
	 ?>
      <a href="index.php?pagina=2" aria-label="Next" class=" btn">
        <span aria-hidden="true">&raquo;</span>
      </a>
<td></td>
<td><a href="vista/agregarUsuario.php"><button class="btn-success">Agregar</button> </a></td>
</tr>
		 			</td>
  </table>
</div>

<table class="table">
	
</table>
	
</body>
</html>