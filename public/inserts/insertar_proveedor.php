<?php 
	require_once('../public/gets/get_proveedor.php');
	require_once('../public/conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_proveedor();
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	//$id_proveedor=(int)$mostrar->pasar_proveedor()[0],
	$nombre_proveedor=$mostrar->pasar_proveedor()[0],
	$telefono_proveedor =$mostrar->pasar_proveedor()[1]
	

);

	 // echo var_dump($datos);
	 $statement = $cone->prepare("CALL PIproveedor(?,?);");
	 $statement->bind_param("ss",
	 	// $id_proveedor,
	 	$nombre_proveedor,
	 	$telefono_proveedor
	 	
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/proveedores.php');
 
 ?>

