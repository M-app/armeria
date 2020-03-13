<?php 

	require_once('../conexion.php');
	$id_producto = $_GET['link'];
	$mysql = new conexion_db();
	$cone = $mysql->get_conexion();

	$statement = $cone->prepare("CALL PDproducto(?);");
	$statement->bind_param("i",
	 	
	 	$id_producto
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/productos.php');
 ?>