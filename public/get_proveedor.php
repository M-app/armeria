<?php  



	class get_proveedor{

		//public $id_proveedor;
		public $nombre_proveedor;
		public $telefono_proveedor;
		



		
		function __construct()
		{
			//$this->id_proveedor = $_POST['id_proveedor'];
			$this->nombre_proveedor = $_POST['nombre_proveedor'];
			$this->telefono_proveedor = $_POST['telefono_proveedor'];
		}

		
		public function pasar_proveedor(){
			$datos_proveedor = array(

				//$this->id_proveedor,
			    $this->nombre_proveedor,
			    $this->telefono_proveedor
				
			);
			return $datos_proveedor;
		}
	}
?>
