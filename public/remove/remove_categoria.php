<?php 

	require_once('../conexion.php');
	$id_categoria = $_GET['link'];
	$mysql = new conexion_db();
	$cone = $mysql->get_conexion();

	$statement = $cone->prepare("CALL PDcategoria(?);");
	$statement->bind_param("i",
	 	
	 	$id_categoria
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/categorias.php');
 ?>