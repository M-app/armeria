<?php 
  require_once('../public/conexion.php');
  /**
   * conteo de id de clientes
   */
  class conteo_id_modelo{
    
    public $conteo_mod;



    function __construct(){

      $this->conteo_mod;
    }

    public function get_conteo_id_modelo(){
      $mysql = new conexion_db();
      $conection = $mysql->get_conexion();

      $consulta = "SELECT id_modelo FROM modelo";

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
          $this->conteo_mod = $fila['id_modelo'];
      }

        return (int)$this->conteo_mod+1;
    }
  }
 
 ?>