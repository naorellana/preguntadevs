<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC PHP</title>
</head>
<body>
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">TEST PREGUNTADEVS  </div>
  
	

  <!-- Table -->
  <table class="table">
  <tr class="bg-info">
  	<td><b>PREGUNTA</b></td>
  	<td><b>SELECIONE RESPUESTA</b></td>
  	<form action="modelo/respuestasTest.php">
  </tr>
    <?php
		#require_once("controlador/tablaControlador.php");
     $pre=0;
     $id=10;
		foreach ($matrizRegistros as $lin1) {
			$pre++;
			$id++;
			$PREGUNTA= $lin1["PREGUNTA"];
			$RESPA=$lin1["RESPA"];
			$RESPB= $lin1["RESPB"];
			$RESPC= $lin1["RESPC"];
			$RESPCORRECTA= $lin1["RESPCORRECTA"];
			$NIVEL= $lin1["NIVEL"];
			$ETIQUETA= $lin1["ETIQUETA"];
			$IDPREGUNTA= $lin1["IDPREGUNTA"];
			$USUARIO= $lin1["USUARIO"];
		 	echo "<tr><td>". $PREGUNTA . " </td>	";
		 	echo "<input type='hidden' select name=\"$id\" id=\"$pre\" class=\"form-control\" value='$IDPREGUNTA'> </input>";
		 	echo "<td> <select name=\"$pre\" id=\"$pre\" class=\"form-control\"> 
				  <option value=\"$RESPA\">$RESPA</option>
				  <option value=\"$RESPB\">$RESPB</option>
				  <option value=\"$RESPC\">$RESPC</option>
				</select></td>"; #pre es el numero de pregunta para identificar cada select y obtener de eso las respuestas
		 	#boton para modificar
		 	#echo "<td> <a href='vista/editarPreguntaVista.php?PREGUNTA=". $dato1 . " & RESPA= ". $dato2 . " & RESPB= ". $dato3 . " & RESPC= ". $dato4 . " & IDPREGUNTA= ". $dato5 . " & USUARIO= ". $dato6 .   " ' > <button class='btn-warning'> Editar </button> </a>  </td>";

		 	#<td><button class='btn-primary'>Actualizar</button></td>";
		 	#echo "<td> <a href='modelo/borrarRegistrosModelo.php?usuarioId=". $dato8 . "' > <button class='btn-danger'> Eliminar </button> </a>  </td>";
		 	#<td> <a href='modelo/borrarRegistrosModelo.php?id=". $dato3 . "' > <input type='button'> </a>  </td> ";
		 	
		 }
	 ?>	

	 <tr>
		 			
		 			<td>
      <a href="index.php" aria-label="Previous" class=" btn">
        <span aria-hidden="true">&laquo;</span>
      </a>
    	<?php 
		require_once("modelo/paginacion.php");
		for ($i=1; $i<=2; $i++) { 		#3 es para definir la cantidad de registros a mostrar en la paginacion
							echo "<a href='?pagina=". $i . "'class=' btn'>" .$i .  "</a> ";
						}
		#echo "<td> <a href='vista/editarPreguntaVista.php?PREGUNTA=". $dato1 . " & RESPA= ". $dato2 . " & RESPB= ". $dato3 . " & RESPC= ". $dato4 . " & IDPREGUNTA= ". $dato8 . " & USUARIO= ". $dato6 .   " ' > <button class='btn-primary'> fin </button> </a>  </td>";
	 ?>
      <a href="index.php?pagina=2" aria-label="Next" class=" btn">
        <span aria-hidden="true">&raquo;</span>
      </a>
<td><a href=""><button class="btn-success" onclick="alertaTest()">FINALIZAR TEST</button> </a></td>
</tr>
		 			</td></form>
  </table>
</div>

<table class="table">
	
</table>
	
</body>
</html>