<?php 
require_once("modelo/preguntaModelo.php");
$registros=new Preguntas_modelo();
$matrizRegistros=$registros->getRegistros();	
require_once("vista/preguntasVista.php");
 ?>