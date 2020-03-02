<?php 
	require_once('../get_update/get_update_producto.php');
	require_once('../../conexion.php');
 	//obtenemos los datos del formulario
	$get_datos = new get_datos_productos();
	$cantidad = sizeof($get_datos->pasar_datos());
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	$id_producto =$get_datos->pasar_datos()[0],
  	$codigo_producto=$get_datos->pasar_datos()[1], 
    $id_categoria =(int)$get_datos->pasar_datos()[2],
    $id_tipo_categoria =(int)$get_datos->pasar_datos()[3],
    $id_marca =(int)$get_datos->pasar_datos()[4],
  	$id_modelo =(int)$get_datos->pasar_datos()[5],
  	$id_calibre =(int)$get_datos->pasar_datos()[6],
  	$nombre_producto =$get_datos->pasar_datos()[7],
  	$descripcion =$get_datos->pasar_datos()[8],
  	$numero_registro_producto =$get_datos->pasar_datos()[9],
    $disponibilidad_producto =$get_datos->pasar_datos()[10],
  	$numero_lote =$get_datos->pasar_datos()[11],
  	$precio_compra =$get_datos->pasar_datos()[12],
  	$precio_venta  =$get_datos->pasar_datos()[13],
	
);

	  // echo var_dump($datos);
	 $statement = $cone->prepare("CALL PUproducto(?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
	 $statement->bind_param("isiiiiisssisdd",
	 	$id_producto,
	 	$codigo_producto,
	    $id_categoria, 
	    $id_tipo_categoria, 
        $id_marca, 
	    $id_modelo, 
	    $id_calibre, 
	    $nombre_producto, 
	    $descripcion, 
	    $numero_registro_producto, 
	    $disponibilidad_producto ,
	    $numero_lote ,
	    $precio_compra, 
	    $precio_venta    
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../../templates/productos.php');
 
 ?>