<?php 

	require_once('../conexion.php');
	$id_tipo_categoria = $_GET['link'];
	$mysql = new conexion_db();
	$cone = $mysql->get_conexion();

	$statement = $cone->prepare("CALL PDtipo_categoria(?);");
	$statement->bind_param("i",
	 	
	 	$id_tipo_categoria
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/tipoCategoria.php');
 ?>