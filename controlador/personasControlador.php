<?php 
require_once("modelo/personaModelo.php");
$registros=new Personas_modelo();
$matrizRegistros=$registros->getRegistros();	
require_once("vista/personaVista.php");
 ?>