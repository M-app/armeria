<?php  



	class get_datos_categoria{

		//public $id_categoria;
		public $nombre_categoria;
		



		
		function __construct()
		{
			//$this->id_categoria = $_POST['id_categoria'];
			$this->nombre_categoria = $_POST['nombre_categoria'];
			


		}
		public function pasar_datos_categoria(){
			$datos_categoria = array(

				//$this->id_categoria,
			    $this->nombre_categoria,
				
			);
			return $datos_categoria;
		}
	}
?>
