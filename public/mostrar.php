<?php 
require_once('conexion.php');


	class pasar{
		
		public $id_categoria;



		function __construct()		{
			$this->id_categoria ;

		}

		public function prueba(){


			$mysql = new conexion_db();
	          $conection = $mysql->get_conexion();

	          $consulta = "SELECT id_categoria FROM tipo_categoria; ";

	           $resultado = mysqli_query($conection,$consulta);
	           //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
	           $num = mysqli_num_rows($resultado);
	           $fila = mysqli_fetch_array($resultado,MYSQLI_NUM);
	          // echo var_dump($num);
	          for ($i=0; $i <$num; $i++) { 
	            mysqli_data_seek($resultado, $i);
	          $fila = mysqli_fetch_array($resultado,MYSQLI_NUM);
	            for ($j=1; $j <= $num; $j++) { 
	                
	            }

	            $toto = array(

	            	$this->id_categoria = $fila['id_categoria']
	            );

	            
	           }
	           return $toto;
		}

		

	}


	


 ?>