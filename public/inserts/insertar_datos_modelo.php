<?php 
	require_once('../gets/get_datos_modelo.php');
	require_once('../conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_datos_modelo();
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	//$id_modelo=(int)$mostrar->pasar_datos_modelo()[0],
	$nombre_modelo=$mostrar->pasar_datos_modelo()[0],
	

);

	 /*echo var_dump($datos);*/
	 $statement = $cone->prepare("CALL PImodelo(?);");
	 $statement->bind_param("s",
	 	//$id_modelo,
	 	$nombre_modelo
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/modelo.php');
 
 ?>

