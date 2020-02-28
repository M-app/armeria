<?php 
	require_once('../gets/get_producto.php');
	require_once('../conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_producto();
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	
	$codigo_producto= $mostrar->pasar_producto()[0],
	$dato_categoria= (int)$mostrar->pasar_producto()[1],
	$tipo_categoria= (int)$mostrar->pasar_producto()[2],
	$dato_marca= (int)$mostrar->pasar_producto()[3],
	$dato_modelo= (int)$mostrar->pasar_producto()[4],
	$dato_calibre= (int)$mostrar->pasar_producto()[5],
	$nombre_producto= $mostrar->pasar_producto()[6],
	$descripcion = $mostrar->pasar_producto()[7],
	$numero_registro= $mostrar->pasar_producto()[8],
	$disponibilidad= (int)$mostrar->pasar_producto()[9],
	$lote = $mostrar->pasar_producto()[10],
	$precio_compra=(float)$mostrar->pasar_producto()[11],
	$precio_venta=(float)$mostrar->pasar_producto()[12],
	

);

	 // echo var_dump($datos);
	 $statement = $cone->prepare("CALL PIproducto(?,?,?,?,?,?,?,?,?,?,?,?,?);");
	 $statement->bind_param("siiiiisssisdd",
	 	
	 	$codigo_producto,
	 	$dato_categoria,
		$tipo_categoria,
		$dato_marca,
		$dato_modelo,
		$dato_calibre,
		$nombre_producto,
		$descripcion,
		$numero_registro,
		$disponibilidad,
		$lote,
		$precio_compra,
		$precio_venta
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);
	 // echo var_dump($datos);

	 header('location: ../../templates/productos.php');
 
 ?>