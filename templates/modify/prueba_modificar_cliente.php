<?php  
  require_once('../../public/conexion.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Modificar Cliente</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="../inicio.php"><img src="../../images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="../inicio.php"><img src="../../images/logo.png" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../inicio.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Inicio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../clientes.php">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Clientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Compras</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Ventas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#opc-productos" aria-expanded="false" aria-controls="opc-productos">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="opc-productos">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../productos.php">Todos los Productos</a></li>
                <li class="nav-item"> <a class="nav-link" href="../categorias.php">Categoría</a></li>
                <li class="nav-item"> <a class="nav-link" href="../tipoCategoria.php">Tipo Categoría</a></li>
                <li class="nav-item"> <a class="nav-link" href="../marcas.php">Marca</a></li>
                <li class="nav-item"> <a class="nav-link" href="../modelo.php">Modelo</a></li>
                <li class="nav-item"> <a class="nav-link" href="../calibres.php">Calibre</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="descripciones.php">Descripción</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../proveedores.php">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Proveedores</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pos.php">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Punto de Venta</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Datos del Cliente</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Por favor, ingresar los datos en el formulario</h4>
                  <form class="form-sample" action="../../public/updates/insert_update/insert_update_cliente.php" method="POST">
                    <p class="card-description">
                      Información Personal
                    </p>
                    <?php 
                          
                          $mysql = new conexion_db();
                          $conection = $mysql->get_conexion();

                          $consulta = "call psidcliente(".$_GET['link'].");";

                           $resultado = mysqli_query($conection,$consulta);
                           //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
                           $num = mysqli_num_rows($resultado);
                           $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
                          // echo var_dump($num);
                          for ($i=0; $i <$num; $i++) { 
                            mysqli_data_seek($resultado, $i);
                          $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
                            for ($j=1; $j <= $num; $j++) { 
                                
                            }
                          }
                          ?>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Codigo de cliente</label>
                          <div class="col-sm-9">
                            <input type="number" name="cod_cliente" class="form-control" 
                            <?php 
                              echo 'value="'.$fila['id_cliente'].'"';
                             ?>
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                      	<div class="form-group row">
                          <label class='col-sm-3 col-form-label'>Nombre</label>                          
                          <div class="col-sm-9">
                            <input type="text" name="nombre_cliente"  class="form-control" value="<?php echo $fila['nombre_cliente'];?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">DPI</label>
                          <div class="col-sm-9">
                            <input type="text" name="dpi_cliente" class="form-control" value="<?php echo $fila['dpi_cliente'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NIT</label>
                          <div class="col-sm-9">
                            <input type="text" name="nit_cliente" class="form-control" value="<?php echo $fila['nit_cliente'];?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Departamento</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="departamento" id="select_departamento">
                              <option>Departamento</option>
                              <option>Guatemala</option>
                              <option>Huehuetenango</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Municipio</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="municipio">
                              <option>Chiantla</option>
                              <option>Malacatancito</option>
                              <option>San Juan Ixcoy</option>
                              <option>Soloma</option>
                              <option>Cuilco</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div id="texto_prueba">
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Zona</label>
                          <div class="col-sm-9">
                            <input type="text" name="zona_cliente" class="form-control" value="<?php echo $fila['zona_cliente'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Dirección</label>
                          <div class="col-sm-9">
                            <input type="text" name="direccion_cliente" class="form-control" value="<?php echo $fila['direccion_cliente'];?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Teléfono</label>
                          <div class="col-sm-9">
                            <input type="text" name="telefono_cliente" class="form-control" value="<?php echo $fila['telefono_cliente'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Correo</label>
                          <div class="col-sm-9">
                            <input type="text" name="correo_cliente" class="form-control" value="<?php echo $fila['correo_cliente'];?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contacto</label>
                          <div class="col-sm-9">
                            <input type="text" name="contacto" class="form-control" value="<?php echo $fila['contacto_cliente'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Responsable</label>
                          <div class="col-sm-9">
                            <input type="text" name="responsable" class="form-control" value="<?php echo $fila['nombre_responsable_cliente'];?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Datos de Armas
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tipo de Arma 1</label>
                          <div class="col-sm-9">
                            <input type="text" name="tipo_arma_1" class="form-control" value="<?php echo $fila['tipo_arma_1'];?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tipo de Arma 2</label>
                          <div class="col-sm-9">
                            <input type="text" name="tipo_arma_2" class="form-control" value="<?php echo $fila['tipo_arma_2'];?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tipo de Arma 3</label>
                          <div class="col-sm-9">
                            <input type="text" name="tipo_arma_3" class="form-control" value="<?php echo $fila['tipo_arma_3'];?>" >
                          </div>
                        </div>
                      </div>
                       <?php 
                          
                          $mysql = new conexion_db();
                          $conection = $mysql->get_conexion();

                          $consulta = "call psidcliente(".$_GET['link'].");";

                           $resultado = mysqli_query($conection,$consulta);
                           //$datos_cliente = mysqli_fetch_array($resultado,MYSQLI_NUM); 
                           $num = mysqli_num_rows($resultado);
                           $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
                          // echo var_dump($num);
                          for ($i=0; $i <$num; $i++) { 
                            mysqli_data_seek($resultado, $i);
                          $fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
                            for ($j=1; $j <= $num; $j++) { 
                                
                            }
                          }
                          ?>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Número de Licencia</label>
                          <div class="col-sm-9">
                            <input type="text" name="numero_licencia" class="form-control" value="<?php echo $fila['numero_licencia'];?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Fecha de Vencimiento</label>
                          <div class="col-sm-9">
                            <input type="text" name="fecha_vencimiento" class="form-control" value="<?php echo $fila['fecha_vencimiento'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tenencia 1</label>
                          <div class="col-sm-9">
                            <input type="text" name="tenencia_1" class="form-control" value="<?php echo $fila['tenencia_arma_1'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tenencia 2</label>
                          <div class="col-sm-9">
                            <input type="text" name="tenencia_2" class="form-control" value="<?php echo $fila['tenencia_arma_2'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tenencia 3</label>
                          <div class="col-sm-9">
                            <input type="text" name="tenencia_3" class="form-control" value="<?php echo $fila['tenencia_arma_3'];?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Calibre 1</label>
                          <div class="col-sm-9">
                            <input type="text" name="calibre_1" class="form-control" value="<?php echo $fila['calibre_identificacion_1'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Calibre 2</label>
                          <div class="col-sm-9">
                            <input type="text" name="calibre_2" class="form-control" value="<?php echo $fila['calibre_identificacion_2'];?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Calibre 3</label>
                          <div class="col-sm-9">
                            <input type="text" name="calibre_3" class="form-control" value="<?php echo $fila['calibre_identificacion_3'];?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Listo</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Armería el Sherif</span>
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/clientes.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
