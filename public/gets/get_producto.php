<?php 

	require_once('../conexion.php');

	class get_producto{

		public $codigo_producto;
    public $dato_categoria;
    public $tipo_categoria;
    public $dato_marca;
    public $dato_modelo;
    public $dato_calibre;
    public $nombre_producto;
    public $descripcion;
    public $numero_registro;
    public $disponibilidad;
    public $lote;
    public $precio_compra;
    public $precio_venta;
    
		

		function __construct(){
			
			$this->codigo_producto = $_POST['codigo_prod'];
      $this->dato_categoria = $_POST['dato_categoria'];
      $this->tipo_categoria = $_POST['tipo_categoria'];
      $this->dato_marca = $_POST['dato_marca'];
      $this->dato_modelo = $_POST['dato_modelo'];
      $this->dato_calibre = $_POST['dato_calibre'];
			$this->nombre_producto = $_POST['nombre_producto'];
			$this->descripcion = $_POST['descripcion_1'];
			$this->numero_registro = $_POST['numero_registro'];
			$this->disponibilidad = $_POST['disponibilidad'];
			$this->lote = $_POST['lote'];
			$this->precio_compra = $_POST['precio_compra'];
			$this->precio_venta = $_POST['precio_venta'];
			
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
              if ($this->dato_categoria == $fila['nombre_categoria'] ) {
              	$this->dato_categoria = $fila['id_categoria'];
              }
            }        

            return $this->dato_categoria;
		}

		public function get_id_tipo_categoria(){

			$mysql = new conexion_db();
            $conection = $mysql->get_conexion();

            $consulta = "SELECT id_tipo_categoria, nombre_tipo_arma FROM tipo_categoria";

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
              if ($this->tipo_categoria == $fila['nombre_tipo_arma'] ) {
              	$this->tipo_categoria = $fila['id_tipo_categoria'];
              }
            }

            return $this->tipo_categoria;
		}

        public function get_id_marca(){

			$mysql = new conexion_db();
            $conection = $mysql->get_conexion();

            $consulta = "SELECT id_marca, nombre_marca FROM marca";

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
              if ($this->dato_marca == $fila['nombre_marca'] ) {
              	$this->dato_marca = $fila['id_marca'];
              }
            }

            return $this->dato_marca;
		}


        public function get_id_modelo(){

			$mysql = new conexion_db();
            $conection = $mysql->get_conexion();

            $consulta = "SELECT id_modelo, nombre_modelo FROM modelo";

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
              if ($this->dato_modelo == $fila['nombre_modelo'] ) {
              	$this->dato_modelo = $fila['id_modelo'];
              }
            }
            return $this->dato_modelo;
		}


        public function get_id_calibre(){

			$mysql = new conexion_db();
            $conection = $mysql->get_conexion();

            $consulta = "SELECT id_calibre, nombre_calibre FROM calibre";

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
              if ($this->dato_calibre == $fila['nombre_calibre'] ) {
              	$this->dato_calibre = $fila['id_calibre'];
              }
            }
            return $this->dato_calibre;
		}       

		public function pasar_producto(){
			$prod_cat = new get_producto();
			$d_categoria = $prod_cat->get_id_categoria();

			$prod_tip_cat = new get_producto();
			$d_tip_cat = $prod_tip_cat->get_id_tipo_categoria();

			$prod_mar = new get_producto();
			$d_mar = $prod_mar->get_id_marca();

			$prod_mod = new get_producto();
			$d_mod = $prod_mod->get_id_modelo();

			$prod_cal =new get_producto();
			$d_cal = $prod_cal->get_id_calibre();

			
			$datos_producto = array(

				$this->codigo_producto,
        $this->dato_categoria = $d_categoria,
        $this->tipo_categoria = $d_tip_cat,
        $this->dato_marca = $d_mar,
        $this->dato_modelo = $d_mod,
        $this->dato_calibre = $d_cal,
				$this->nombre_producto,
				$this->descripcion,
				$this->numero_registro,
        $this->disponibilidad,
        $this->lote,
        $this->precio_compra,
        $this->precio_venta				
			);
			return $datos_producto;
      
		}



}


	
 ?>