<?php 
	class Preguntas_modelo{
		private $db;		/*almacena la conexion*/
		private $registros; /*almacena los registros de la tabla */
		public function __construct (){
			require_once ("modelo/conectarModelo.php");
			$this->db=Conectar::conexion();
			$this->registros = array();
		}
		#private $nivel=$_POST["NIVEL"];
		#private		$etiqueta=$_GET["ETIQUETA"];
		public function getRegistros($nivel, $etiqueta ){
				require_once("paginacion.php");
				#$nivel=$nivell;
				#$etiqueta=this.$etiquetaa;
			#$consulta=$this->db->query("SELECT * FROM dbpreguntadevs.PREGUNTAS LIMIT $empezar_desde, $tamanoPaginas");
			#$consulta=$this->db->query("SELECT * FROM PREGUNTAS LIMIT $empezar_desde, $tamanoPaginas");  #hostinger
			$consulta=$this->db->query("SELECT * FROM dbpreguntadevs.PREGUNTAS where NIVEL=$nivel AND ETIQUETA=$etiqueta"); #localhost
			#$consulta=$this->db->query("SELECT * FROM PREGUNTAS where NIVEL=$nivel AND ETIQUETA=$etiqueta"); #hostinger
			while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
				$this->registros[]=$filas; 
			}
			return $this->registros;
		}
	}

 ?>
