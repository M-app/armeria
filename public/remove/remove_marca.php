<?php 

	require_once('../conexion.php');
	$id_marca = $_GET['link'];
	$mysql = new conexion_db();
	$cone = $mysql->get_conexion();

	$statement = $cone->prepare("CALL PDmarca(?);");
	$statement->bind_param("i",
	 	
	 	$id_marca
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/marcas.php');
 ?>