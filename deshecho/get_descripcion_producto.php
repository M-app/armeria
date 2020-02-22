<?php  


	class get_descripciones{

		//public $id_cliente;
		public $descripcion_1;
		public $descripcion_2;
		public $descripcion_3;
		public $descripcion_4;
		


		
		function __construct()
		{
			//$this->id_cliente = $_POST['id'];
			$this->descripcion_1 = $_POST['descrip_1'];
			$this->descripcion_2 = $_POST['descrip_2'];
			$this->descripcion_3 = $_POST['descrip_3'];
			$this->descripcion_4 = $_POST['descrip_4'];
			
		}
		public function pasar_descripcion(){
			$num_descripcion = array(

				//$this->id_cliente,
			    $this->descripcion_1,
				$this->descripcion_2,			    
				$this->descripcion_3,				
				$this->descripcion_4,				
						
			);
			return $num_descripcion;
		}
	}
?>
