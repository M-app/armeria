<?php 

	require_once('../conexion.php');
	$id_modelo = $_GET['link'];
	$mysql = new conexion_db();
	$cone = $mysql->get_conexion();

	$statement = $cone->prepare("CALL PDmodelo(?);");
	$statement->bind_param("i",
	 	
	 	$id_modelo
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/modelo.php');
 ?>