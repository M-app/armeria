<?php 

	require_once('../conexion.php');
	$id_cliente = $_GET['link'];
	$mysql = new conexion_db();
	$cone = $mysql->get_conexion();

	$statement = $cone->prepare("CALL PDcliente(?);");
	$statement->bind_param("i",
	 	
	 	$id_cliente
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/clientes.php');
 ?>