<?php  



	class get_datos_calibre{

		//public $id_calibre;
		public $nombre_calibre;
		
		function __construct()
		{
			//$this->id_calibre = $_POST['id_calibre'];
			$this->nombre_calibre = $_POST['nombre_calibre'];
		}


		
		public function pasar_datos_calibre(){
			$datos_calibre = array(

				//$this->id_calibre,
			    $this->nombre_calibre,
				
			);
			return $datos_calibre;
		}
	}
?>
