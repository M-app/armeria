<?php 
	require_once('../gets/get_datos_calibre.php');
	require_once('../conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_datos_calibre();
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	//$id_calibre=(int)$mostrar->pasar_datos_calibre()[0],
	$nombre_calibre=$mostrar->pasar_datos_calibre()[0],
	

);

	 /*echo var_dump($datos);*/
	 $statement = $cone->prepare("CALL PIcalibre(?);");
	 $statement->bind_param("s",
	 	//$id_calibre,
	 	$nombre_calibre
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/calibres.php');
 
 ?>

