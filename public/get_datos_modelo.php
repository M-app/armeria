<?php  



	class get_datos_modelo{

		//public $id_modelo;
		public $nombre_modelo;

		function __construct()
		{
			//$this->id_modelo = $_POST['id_modelo'];
			$this->nombre_modelo = $_POST['nombre_modelo'];
			


		}
		public function pasar_datos_modelo(){
			$datos_modelo = array(

				//$this->id_modelo,
			    $this->nombre_modelo
				
			);
			return $datos_modelo;
		}
	}
?>
