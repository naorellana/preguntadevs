<?php 
	class Registros_modelo{
		private $db;		/*almacena la conexion*/
		private $registros; /*almacena los registros de la tabla */
		public function __construct (){
			require_once ("modelo/conectarModelo.php");
			$this->db=Conectar::conexion();
			$this->registros = array();
		}
		public function getRegistros(){
			$consulta=$this->db->query('SELECT * FROM dbpreguntadevs.tbusuarios');
			while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
				$this->registros[]=$filas; 
			}
			return $this->registros;
		}
	}

 ?>
