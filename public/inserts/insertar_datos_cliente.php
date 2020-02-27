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
	$departamento_cliente=$mostrar->pasar_datos()[3], 
	$municipio_cliente=$mostrar->pasar_datos()[4], 
	$zona_cliente=$mostrar->pasar_datos()[5],
	$direccion_cliente=$mostrar->pasar_datos()[6],
	$telefono_cliente=$mostrar->pasar_datos()[7] ,
	$correo_cliente=$mostrar->pasar_datos()[8],
	$contacto_cliente=$mostrar->pasar_datos()[9],
	$responsable=$mostrar->pasar_datos()[10] ,
	$tipo_arma_1=$mostrar->pasar_datos()[11] ,
	$tipo_arma_2=$mostrar->pasar_datos()[12] ,
	$tipo_arma_3=$mostrar->pasar_datos()[13] ,
	$numero_licencia=$mostrar->pasar_datos()[14],
	$fecha_vencimiento=$mostrar->pasar_datos()[15],
	$tenencia_1=$mostrar->pasar_datos()[16],
	$tenencia_2=$mostrar->pasar_datos()[17],
	$tenencia_3=$mostrar->pasar_datos()[18],
	$calibre_1=$mostrar->pasar_datos()[19],
	$calibre_2=$mostrar->pasar_datos()[20],
	$calibre_3=$mostrar->pasar_datos()[21]


);

	 // echo var_dump($datos);
	 $statement = $cone->prepare("CALL PIcliente(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
	 $statement->bind_param("ssssssssssssssssssssss",
	 	//$id_cliente,
	 	 $nombre_cliente,
	     $dpi_cliente,
	     $nit_cliente,
	     $departamento_cliente,
	     $municipio_cliente,
	     $zona_cliente,
	     $direccion_cliente,
	     $telefono_cliente,
	     $correo_cliente,
	     $contacto_cliente,
	     $responsable,
	     $tipo_arma_1,
	     $tipo_arma_2,
	     $tipo_arma_3,
	     $numero_licencia,
	     $fecha_vencimiento,
	     $tenencia_1,
	     $tenencia_2,
	     $tenencia_3,
	     $calibre_1,
	     $calibre_2,
	     $calibre_3
	 );
	 $statement->execute();
	 $statement->close();
	 mysqli_close($cone);

	 header('location: ../../templates/clientes.php');
 
 ?>

