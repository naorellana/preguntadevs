<?php 
require_once("modelo/consultarModelo.php");
$registros=new registros_Modelo();
$matrizRegistros=$registros->getRegistros();	
require_once("vista/tablaVista.php");
 ?>