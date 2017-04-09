<?php 
	class Preguntas_modelo{
		private $db;		/*almacena la conexion*/
		private $registros; /*almacena los registros de la tabla */
		public function __construct (){
			require_once ("modelo/conectarModelo.php");
			$this->db=Conectar::conexion();
			$this->registros = array();
		}
		public function getRegistros(){
				require_once("paginacion.php");

			#$consulta=$this->db->query("SELECT * FROM dbpreguntadevs.PREGUNTAS LIMIT $empezar_desde, $tamanoPaginas");
			$consulta=$this->db->query("SELECT * FROM PREGUNTAS LIMIT $empezar_desde, $tamanoPaginas"); 
			#$consulta=$this->db->query("SELECT * FROM dbpreguntadevs.PREGUNTAS"); #localhost
			#$consulta=$this->db->query("SELECT * FROM PREGUNTAS"); #hostinger
			while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
				$this->registros[]=$filas; 
			}
			return $this->registros;
		}
	}

 ?>
