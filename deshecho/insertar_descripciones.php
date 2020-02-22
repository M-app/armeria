<?php 
	require_once('get_descripcion_producto.php');
	require_once('conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_descripciones();
	$cantidad = sizeof($mostrar->pasar_descripcion());
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	//$id_cliente=(int)$mostrar->pasar_datos()[0],
	$descripcion_1 =$mostrar->pasar_descripcion()[0],
	$descripcion_2 =$mostrar->pasar_descripcion()[1],
	$descripcion_3 =$mostrar->pasar_descripcion()[2],
	$descripcion_4 =$mostrar->pasar_descripcion()[3], 
);

	 /*echo var_dump($datos);*/
	 $statement = $cone->prepare("CALL PIdescripcion_producto(?,?,?,?);");
	 $statement->bind_param("ssss",
	 	//$id_cliente,
	 	$descripcion_1,
	 	$descripcion_2,
	 	$descripcion_3,
	 	$descripcion_4
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../templates/descripciones.php');
 
 ?>

