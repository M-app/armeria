<?php 
	require_once('../gets/get_datos_clientes.php');
	require_once('../conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_datos_clientes();
	$cantidad = sizeof($mostrar->pasar_datos());
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	//$id_cliente=(int)$mostrar->pasar_datos()[0],
	$nombre_cliente=$mostrar->pasar_datos()[0],
	$dpi_cliente=$mostrar->pasar_datos()[1],
	$nit_cliente=$mostrar->pasar_datos()[2],
	$departamento=$mostrar->pasar_datos()[3], 
	$municipio=$mostrar->pasar_datos()[4], 
	$zona_cliente=$mostrar->pasar_datos()[5],
	$direccion_cliente=$mostrar->pasar_datos()[6],
	$telefono_cliente=$mostrar->pasar_datos()[7] ,
	$correo_cliente=$mostrar->pasar_datos()[8],
	$contacto=$mostrar->pasar_datos()[9],
	$responsable=$mostrar->pasar_datos()[10] ,
	$tipo_arma=$mostrar->pasar_datos()[11] ,
	$numero_licencia=$mostrar->pasar_datos()[12],
	$fecha_vencimiento=$mostrar->pasar_datos()[13],
	$tenencia=$mostrar->pasar_datos()[14],
	$calibre=$mostrar->pasar_datos()[15]


);

	 /*echo var_dump($datos);*/
	 $statement = $cone->prepare("CALL PIcliente(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
	 $statement->bind_param("ssssssssssssssss",
	 	//$id_cliente,
	 	$tipo_arma,
	 	$numero_licencia,
	 	$fecha_vencimiento,
	 	$tenencia,
	 	$calibre,
	 	$nombre_cliente,
	 	$nit_cliente,
	 	$dpi_cliente,
	 	$direccion_cliente,
	 	$zona_cliente,
	 	$departamento,
	 	$municipio,
	 	$telefono_cliente,
	 	$correo_cliente,
	 	$contacto,
	 	$responsable
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/clientes.php');
 
 ?>

