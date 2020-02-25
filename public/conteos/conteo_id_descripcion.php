<?php 
  require_once('../public/conexion.php');
  /**
   * conteo de id de clientes
   */
  class conteo_id_descripcion{
    
    public $conteo_desc;



    function __construct(){

      $this->conteo_desc;
    }

    public function get_conteo_id_descripcion(){
      $mysql = new conexion_db();
      $conection = $mysql->get_conexion();

      $consulta = "SELECT id_descripcion_producto FROM descripcion_producto";

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
          $this->conteo_desc = $fila['id_descripcion_producto'];
      }

        return (int)$this->conteo_desc+1;
    }
  }
 
 ?>