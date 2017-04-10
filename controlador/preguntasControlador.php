<?php 
#al parecer quedá sin uso se hace llamada desde bienvenida.php
require_once("modelo/preguntaModelo.php");
$registros=new Preguntas_modelo();
#require_once("modelo/preguntaModelo.php");
$matrizRegistros=$registros->getRegistros(2,1);	
require_once("vista/preguntasVista.php");
 ?>