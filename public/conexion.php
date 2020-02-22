<?php 

	class conexion_db{
		private $conexion;	
		
		function __construct()
		{
			
			$this->conexion = new mysqli("localhost","root","","basesheriff");
		}

		public function get_conexion(){
			return $this->conexion;
		}
	}

 ?>