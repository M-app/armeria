<?php 
  require_once('conexion.php');
  /**
   * conteo de id de clientes
   */
  class conteo_id_tipo_categoria{
    
    public $conteo;



    function __construct(){

      $this->conteo;
    }

    public function get_conteo_id_tipo_categoria(){
      $mysql = new conexion_db();
      $conection = $mysql->get_conexion();

      $consulta = "SELECT id_tipo_categoria FROM tipo_categoria";

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
          $this->conteo = $fila['id_tipo_categoria'];
      }

        return (int)$this->conteo+1;
    }
  }
 
 ?>