<?php 

	require_once('../conexion.php');
	$id_calibre = $_GET['link'];
	$mysql = new conexion_db();
	$cone = $mysql->get_conexion();

	$statement = $cone->prepare("CALL PDcalibre(?);");
	$statement->bind_param("i",
	 	
	 	$id_calibre
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/calibres.php');
 ?>