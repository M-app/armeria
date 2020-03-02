<?php 

  require_once('../../public/conexion.php');

 ?>


<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Datos Producto</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">

  <!-- links para la venta emergente -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="../../css/estilos.css">
  <link rel="stylesheet" href="../../css/estilos2.css">


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
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Buscar" aria-label="search" aria-describedby="search">
            </div>
          </li>
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
                    <h2>Modificar Producto</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <STRONG>MODIFIQUE LOS CAMPOS NECESARIOS</STRONG></h4>
                  <form class="form-sample" action="../../public/updates/insert_update/insert_update_producto.php" method="POST">
                    <p class="card-description">
                      Información de Productos
                    </p>
                    
                          <?php 
                          
                          $mysql = new conexion_db();
                          $conection = $mysql->get_conexion();

                          $consulta = "call psidxnombres(".$_GET['link'].");";

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
                          <label class="col-sm-3 col-form-label">ID Producto</label>
                          <div class="col-sm-9">
                            <input type="number" name="id_producto"  class="form-control"  
                              <?php 
                                echo 'value="'.$fila['id_producto'].'"';
                              ?>>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Categoría</label>
                          <div class="col-sm-9">
                            <input type="text" name="dato_categoria"  class="form-control"  
                            value="<?php 
                              echo $fila['nombre_categoria'];
                             ?>" >
                              
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tipo Categoría</label>
                          <div class="col-sm-9">
                            <input id="selectCategoria" name="dato_tipo_categoria" class="form-control" 
                              value="<?php 
                              echo $fila['nombre_tipo_arma'];
                             ?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Marca</label>
                          <div class="col-sm-9">
                            <input type="text" name="dato_marca"  id="selectMarca" class="form-control" 
                            value="<?php 
                              echo $fila['nombre_marca'];
                             ?>">
                              
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Modelo</label>
                          <div class="col-sm-9">
                            <input type="text" name="dato_modelo" id="selectModelo" class="form-control" 
                             value="<?php 
                              echo $fila['nombre_modelo'];
                             ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Calibre</label>
                          <div class="col-sm-9">
                            <input type="text" name="dato_calibre" id="selectCalibre" class="form-control" 
                            value="<?php 
                              echo $fila['nombre_calibre'];
                             ?>">
                              
                          </div>
                        </div>
                      </div>
                      <?php 
                          
                          $mysql = new conexion_db();
                          $conection = $mysql->get_conexion();

                          $consulta = "call pscodproducto(".$_GET['link'].");";

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
                          <label class="col-sm-3 col-form-label">Nombre</label>
                          <div class="col-sm-9">
                            <input type="text" id="nombre-producto" name="nombre_producto" class="form-control" value="<?php 
                              echo $fila['nombre_producto'];
                             ?>">
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Descripción 1</label>
                          <div class="col-sm-9">
                            <input type="text" name="descripcion" class="form-control" value="<?php 
                              echo $fila['descripcion'];
                             ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No. Registro</label>
                          <div class="col-sm-9">
                            <input type="text" name="numero_registro" class="form-control" value="<?php 
                              echo $fila['numero_registro_producto'];
                             ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Disponibilidad</label>
                          <div class="col-sm-9">
                            <input type="text" name="disponibilidad" class="form-control" value="<?php 
                              echo $fila['disponibilidad_producto'];
                             ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No. Lote</label>
                          <div class="col-sm-9">
                            <input type="text" name="lote" class="form-control" value="<?php 
                              echo $fila['numero_lote'];
                             ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Precio Compra</label>
                          <div class="col-sm-9">
                            <input type="text" name="precio_compra" class="form-control" value="<?php 
                              echo $fila['precio_compra'];
                             ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Precio Venta</label>
                          <div class="col-sm-9">
                            <input type="text" name="precio_venta" class="form-control" value="<?php 
                              echo $fila['precio_venta'];
                             ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Codigo de Producto</label>
                          <div class="col-sm-9">
                            <input id="productos" name="codigo_prod" type="text"  class="form-control"
                            value="<?php 
                              echo $fila['codigo_producto'];
                             ?>"> 
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
  <!-- endinject -->
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/productos.js"></script>
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
