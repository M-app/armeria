<?php 
	require_once('../gets/get_datos_categoria.php');
	require_once('../conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_datos_categoria();
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	//$id_categoria=(int)$mostrar->pasar_datos_categoria()[0],
	$nombre_categoria=$mostrar->pasar_datos_categoria()[0],
	

);

	 /*echo var_dump($datos);*/
	 $statement = $cone->prepare("CALL PICategoriaProducto(?);");
	 $statement->bind_param("s",
	 	//$id_categoria,
	 	$nombre_categoria
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/categorias.php');
 
 ?>

