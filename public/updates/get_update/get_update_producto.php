<?php 
  require('../../conexion.php') ;


  class get_datos_productos{

    public $id_producto; 
    public $id_categoria ;
    public $id_tipo_categoria ;
    public $id_marca ;
    public $id_modelo ;
    public $id_calibre ;
    public $nombre_producto; 
    public $descripcion ;
    public $numero_registro_producto; 
    public $disponibilidad_producto; 
    public $numero_lote ;
    public $precio_compra; 
    public $precio_venta  ;
    public $codigo_producto; 
    


    
    function __construct()
    {
      $this->id_producto = (int)$_POST['id_producto'];
      $this->id_categoria = $_POST['dato_categoria'];
      $this->id_tipo_categoria = $_POST['dato_tipo_categoria'];
      $this->id_marca = $_POST['dato_marca'];
      $this->id_modelo = $_POST['dato_modelo'];
      $this->id_calibre = $_POST['dato_calibre'];
      $this->nombre_producto = $_POST['nombre_producto'];
      $this->descripcion = $_POST['descripcion'];
      $this->numero_registro_producto = $_POST['numero_registro'];
      $this->disponibilidad_producto = (int)$_POST['disponibilidad'];
      $this->numero_lote = $_POST['lote'];
      $this->precio_compra = (double)$_POST['precio_compra'];
      $this->precio_venta = (double)$_POST['precio_venta'];
      $this->codigo_producto = $_POST['codigo_prod'];
    }

    public function conversion_id_categoria(){
      $mysql = new conexion_db();
      $cone = $mysql->get_conexion();
      $consulta = "SELECT id_categoria, nombre_categoria FROM categoriaproducto";

       $resultado = mysqli_query($cone,$consulta);
       //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
       $num = mysqli_num_rows($resultado);
       $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
      // echo var_dump($num);
      for ($i=0; $i <$num; $i++) { 
        mysqli_data_seek($resultado, $i);
      $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        for ($j=1; $j <= $num; $j++) { 
            
        }
        if ($fila['nombre_categoria'] ==$this->id_categoria) {
        $aux_categoria = $fila['id_categoria'];
        
      }
      }
      return $aux_categoria;
    }
    public function conversion_id_tipo_categoria(){
      $mysql = new conexion_db();
      $cone = $mysql->get_conexion();
      $consulta = "SELECT id_tipo_categoria, nombre_tipo_arma FROM tipo_categoria";

       $resultado = mysqli_query($cone,$consulta);
       //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
       $num = mysqli_num_rows($resultado);
       $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
      // echo var_dump($num);
      for ($i=0; $i <$num; $i++) { 
        mysqli_data_seek($resultado, $i);
      $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        for ($j=1; $j <= $num; $j++) { 
            
        }
        if ($fila['nombre_tipo_arma'] ==$this->id_tipo_categoria) {
        $aux_tipo_categoria = $fila['id_tipo_categoria'];
        
      }
      }
      return $aux_tipo_categoria;
    }
    public function conversion_id_marca(){
      $mysql = new conexion_db();
      $cone = $mysql->get_conexion();
      $consulta = "SELECT id_marca, nombre_marca FROM marca";

       $resultado = mysqli_query($cone,$consulta);
       //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
       $num = mysqli_num_rows($resultado);
       $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
      // echo var_dump($num);
      for ($i=0; $i <$num; $i++) { 
        mysqli_data_seek($resultado, $i);
      $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        for ($j=1; $j <= $num; $j++) { 
            
        }
        if ($fila['nombre_marca'] ==$this->id_marca) {
        $aux_marca = $fila['id_marca'];
        
      }
      }
      return $aux_marca;
    }
    public function conversion_id_modelo(){
      $mysql = new conexion_db();
      $cone = $mysql->get_conexion();
      $consulta = "SELECT id_modelo, nombre_modelo FROM modelo";

       $resultado = mysqli_query($cone,$consulta);
       //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
       $num = mysqli_num_rows($resultado);
       $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
      // echo var_dump($num);
      for ($i=0; $i <$num; $i++) { 
        mysqli_data_seek($resultado, $i);
      $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        for ($j=1; $j <= $num; $j++) { 
            
        }
        if ($fila['nombre_modelo'] ==$this->id_modelo) {
        $aux_modelo = $fila['id_modelo'];
        
      }
      }
      return $aux_modelo;
    }
    public function conversion_id_calibre(){
      $mysql = new conexion_db();
      $cone = $mysql->get_conexion();
      $consulta = "SELECT id_calibre, nombre_calibre FROM calibre";

       $resultado = mysqli_query($cone,$consulta);
       //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
       $num = mysqli_num_rows($resultado);
       $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
      // echo var_dump($num);
      for ($i=0; $i <$num; $i++) { 
        mysqli_data_seek($resultado, $i);
      $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        for ($j=1; $j <= $num; $j++) { 
            
        }
        if ($fila['nombre_calibre'] ==$this->id_calibre) {
        $aux_calibre = $fila['id_calibre'];
        
      }
      }
      return $aux_calibre;
    }
    public function pasar_datos(){
      $get_id_cat = new get_datos_productos();
      $add_id_cat= $get_id_cat->conversion_id_categoria();

      $get_id_tip_cat = new get_datos_productos();
      $add_id_tip_cat= $get_id_tip_cat->conversion_id_tipo_categoria();

      $get_id_marca = new get_datos_productos();
      $add_id_marca= $get_id_marca->conversion_id_marca();

      $get_id_modelo = new get_datos_productos();
      $add_id_modelo= $get_id_modelo->conversion_id_modelo();

      $get_id_calibre = new get_datos_productos();
      $add_id_calibre= $get_id_calibre->conversion_id_calibre();

      $num_datos = array(

        $this->id_producto,
        $this->codigo_producto ,
        $this->id_categoria = $add_id_cat,
        $this->id_tipo_categoria= $add_id_tip_cat ,
        $this->id_marca= $add_id_marca,
        $this->id_modelo = $add_id_modelo ,
        $this->id_calibre = $add_id_calibre, 
        $this->nombre_producto, 
        $this->descripcion ,
        $this->numero_registro_producto ,
        $this->disponibilidad_producto ,
        $this->numero_lote ,
        $this->precio_compra ,
        $this->precio_venta,
        
          
      );
      return $num_datos;
    }
  }
?>
