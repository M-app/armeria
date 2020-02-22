<?php  



	class get_marca{

		//public $id_marca;
		public $nombre_marca;
		



		
		function __construct()
		{
			//$this->id_marca = $_POST['id_marca'];
			$this->nombre_marca = $_POST['nombre_marca'];
			


		}
		public function pasar_marca(){
			$datos_marca = array(

				//$this->id_marca,
			    $this->nombre_marca,
				
			);
			return $datos_marca;
		}
	}
?>
