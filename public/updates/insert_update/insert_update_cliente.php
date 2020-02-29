<?php 
	require_once('../get_update/get_update_cliente.php');
	require_once('../../conexion.php');
 	//obtenemos los datos del formulario
	 $mostrar = new get_datos_clientes();
	$cantidad = sizeof($mostrar->pasar_datos());
	 //creamos un nuevo objeto para la conexion
	 $mysql = new conexion_db();
	 $cone = $mysql->get_conexion();
	
//con este metodo evitamos sql injection

$datos = array(
	$id_cliente=(int)$mostrar->pasar_datos()[0],
	$nombre_cliente=$mostrar->pasar_datos()[1],
	$dpi_cliente=$mostrar->pasar_datos()[2],
	$nit_cliente=$mostrar->pasar_datos()[3],
	$departamento_cliente=$mostrar->pasar_datos()[4], 
	$municipio_cliente=$mostrar->pasar_datos()[5], 
	$zona_cliente=$mostrar->pasar_datos()[6],
	$direccion_cliente=$mostrar->pasar_datos()[7],
	$telefono_cliente=$mostrar->pasar_datos()[8] ,
	$correo_cliente=$mostrar->pasar_datos()[9],
	$contacto_cliente=$mostrar->pasar_datos()[10],
	$responsable=$mostrar->pasar_datos()[11] ,
	$tipo_arma_1=$mostrar->pasar_datos()[12] ,
	$tipo_arma_2=$mostrar->pasar_datos()[13] ,
	$tipo_arma_3=$mostrar->pasar_datos()[14] ,
	$numero_licencia=$mostrar->pasar_datos()[15],
	$fecha_vencimiento=$mostrar->pasar_datos()[16],
	$tenencia_1=$mostrar->pasar_datos()[17],
	$tenencia_2=$mostrar->pasar_datos()[18],
	$tenencia_3=$mostrar->pasar_datos()[19],
	$calibre_1=$mostrar->pasar_datos()[20],
	$calibre_2=$mostrar->pasar_datos()[21],
	$calibre_3=$mostrar->pasar_datos()[22]
);

	 echo var_dump($datos);
	 $statement = $cone->prepare("CALL PUcliente(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
	 $statement->bind_param("issssssssssssssssssssss",
	 	 $id_cliente,
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

	 header('location: ../../../templates/clientes.php');
 
 ?>