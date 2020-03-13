<?php 
	require_once('../gets/get_tipo_categoria.php');
	require_once('../conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_tipo_categoria();
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	
	//$id_tipo_categoria= (int)$mostrar->pasar_tipo_categoria()[1],
	$nombre_tipo_arma= $mostrar->pasar_tipo_categoria()[1],
	$id_categoria= (int)$mostrar->pasar_tipo_categoria()[0],
	
	

);

	 /*echo var_dump($datos);*/
	 $statement = $cone->prepare("CALL PItipo_categoria(?,?);");
	 $statement->bind_param("si",
	 	
	 	//$id_tipo_categoria,
		$nombre_tipo_arma,
		$id_categoria
		
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);
	 
	// echo var_dump($datos);

	 header('location: ../../templates/tipoCategoria.php');
 
 ?>