<?php 

	require_once('../conexion.php');

	class get_tipo_categoria{

		public $id_categoria;
		//public $id_tipo_categoria;
    public $nombre_tipo_arma;

		
		function __construct(){
			
			$this->id_categoria = $_POST['id_categoria'];
			//$this->id_tipo_categoria = $_POST['id_tipo_categoria'];
      		$this->nombre_tipo_arma = $_POST['nombre_tipo_arma'];
			

    }


 		public function get_id_categoria(){

			$mysql = new conexion_db();
        $conection = $mysql->get_conexion();

        $consulta = "SELECT id_categoria, nombre_categoria FROM categoriaproducto";

         $resultado = mysqli_query($conection,$consulta);
         //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
         $num = mysqli_num_rows($resultado);
         $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        // echo var_dump($num);
          for ($i=0; $i <$num; $i++) { 
          mysqli_data_seek($resultado, $i);
          $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
            for ($j=1; $j <= $num; $j++) { 
              
            }
            if ($this->id_categoria == $fila['nombre_categoria'] ) {
          	 $this->id_categoria = $fila['id_categoria'];
            }
          }        

            return $this->id_categoria;
		}

		

		public function pasar_tipo_categoria(){
			$prod_cat = new get_tipo_categoria();
			$d_categoria = $prod_cat->get_id_categoria();

			

			
			$datos_producto = array(

				$this->id_categoria = $d_categoria,
				//$this->id_tipo_categoria,
        		$this->nombre_tipo_arma
	
			);
			return $datos_producto;
		}


	
  }
	
 ?>