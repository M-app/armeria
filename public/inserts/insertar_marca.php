<?php 
	require_once('../gets/get_marca.php');
	require_once('../conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_marca();
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	//$id_marca=(int)$mostrar->pasar_marca()[0],
	$nombre_marca=$mostrar->pasar_marca()[0],
	

);

	 /*echo var_dump($datos);*/
	 $statement = $cone->prepare("CALL PImarca(?);");
	 $statement->bind_param("s",
	 	//$id_marca,
	 	$nombre_marca
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/marcas.php');
 
 ?>

