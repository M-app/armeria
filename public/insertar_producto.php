<?php 
	require_once('get_producto.php');
	require_once('conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_producto();
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	
	$codigo_producto= $mostrar->pasar_producto()[0],
	$nombre_producto= $mostrar->pasar_producto()[1],
	$descripcion_1 = $mostrar->pasar_producto()[2],
	$numero_registro= $mostrar->pasar_producto()[3],
	$disponibilidad= (int)$mostrar->pasar_producto()[4],
	$lote = $mostrar->pasar_producto()[5],
	$precio_compra=(float)$mostrar->pasar_producto()[6],
	$precio_venta=(float)$mostrar->pasar_producto()[7],
	$dato_categoria= (int)$mostrar->pasar_producto()[8],
	$tipo_categoria= (int)$mostrar->pasar_producto()[9],
	$dato_marca= (int)$mostrar->pasar_producto()[10],
	$dato_modelo= (int)$mostrar->pasar_producto()[11],
	$dato_calibre= (int)$mostrar->pasar_producto()[12]

);

	 /*echo var_dump($datos);*/
	 $statement = $cone->prepare("CALL PIproducto(?,?,?,?,?,?,?,?,?,?,?,?,?);");
	 $statement->bind_param("ssssisiiiiiii",
	 	
	 	$codigo_producto,
		$nombre_producto,
		$descripcion_1,
		$numero_registro,
		$disponibilidad,
		$lote,
		$precio_compra,
		$precio_venta,
		$dato_categoria,
		$tipo_categoria,
		$dato_marca,
		$dato_modelo,
		$dato_calibre

	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);
	 echo var_dump($datos);

	 header('location: ../templates/productos.php');
 
 ?>