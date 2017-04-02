<?php
	/*paginacion */
	require_once("modelo/conectarModelo.php");
	$base=Conectar::conexion();
	$tamanoPaginas=3;
	if (isset($_GET["pagina"])) {
		if ($_GET["pagina"]==1) {
			header("Location:bienvenida.php");  #nobre de la pagina inicial
		} else{
			$pagina=$_GET["pagina"];
		}
	}else {
		$pagina=1;
	}
	$empezar_desde=($pagina-1)*$tamanoPaginas;
	$sql_total= "select * from tbusuarios";
	$resultado=$base->prepare($sql_total);
	$num_filas=$resultado->rowCount();
	$total_paginas= ceil($num_filas/$tamanoPaginas);

	
 ?>