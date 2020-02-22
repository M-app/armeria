<?php
  session_start();

  require_once('public/conexion.php');


  $user = $_POST['user'];
  $password = $_POST['pass'];

  $query= "SELECT id_usuario,nombre_usuario FROM usuario WHERE nombre_usuario='".$user."' AND clave_usuario='".$password."';";
  $db = new conexion_db();
  $conexion = $db->get_conexion();
  $result = mysqli_query($conexion,$query);
// echo("Error description: " . mysqli_error($conexion));
  $validacion=mysqli_num_rows($result);

  echo var_dump($validacion);

   if ($validacion==1) {

     $array = mysqli_fetch_array($result);
     $privilegio = $array[0];
     $nombre_usuario = $array[1];
     $_SESSION["privilegio"] = $privilegio;

     switch ($privilegio) {
      case 1:
                header("location: ./public/index.php");
                //echo $validacion;
                break;
     }
   }
  elseif ($validacion == 0) {
    header("location:index.html");
  }

mysqli_close();

 ?>
