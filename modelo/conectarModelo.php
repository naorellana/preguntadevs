<?php 
	class Conectar{
		public static function conexion (){
			try {
				$conexion = new PDO("mysql:host=mysql.hostinger.es; dbname=u726364151_dbprd" ,"u726364151_admin", "1005huevon");
				#conexion = new PDO("mysql:localhost; dbname=dbpreguntadevs" ,"root", "");
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conexion-> exec( "SET CHARACTER SET UTF8");
			} catch (Exception $e) {
				die ("Error ". $e->getMessage() );
				echo "Línea Del Error: ". $e->getLine();
			}
		return $conexion;
		}
		
	}
 ?>