<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Punto de Venta</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="inicio.php"><img src="../images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="inicio.php"><img src="../images/logo.png" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-start">
        <h1>Vender Productos</h1>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="inicio.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Inicio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clientes.php">
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
                <li class="nav-item"> <a class="nav-link" href="productos.php">Todos los Productos</a></li>
                <li class="nav-item"> <a class="nav-link" href="categorias.php">Categoría</a></li>
                <li class="nav-item"> <a class="nav-link" href="tipoCategoria.php">Tipo Categoría</a></li>
                <li class="nav-item"> <a class="nav-link" href="marcas.php">Marca</a></li>
                <li class="nav-item"> <a class="nav-link" href="modelo.php">Modelo</a></li>
                <li class="nav-item"> <a class="nav-link" href="calibres.php">Calibre</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="descripciones.php">Descripción</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="proveedores.php">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Proveedores</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pos.php">
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
            <div class="col-4 grid-margin">
              <div class="card">
                <div class="card-body" style="padding-bottom: 0px;">
                  <h4 class="card-title">Datos de Factura</h4>
                  <form class="forms-sample">
                    <div class="form-group row" style="margin-bottom: 0px;">
                      <label  class="col-sm-4 col-form-label">No. Factura</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                      </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 0px;">
                      <label class="col-sm-4 col-form-label">Fecha</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                      </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 0px;">
                      <label class="col-sm-4 col-form-label">Le Atiende</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-8 grid-margin">
              <div class="card">
                <div class="card-body" style="padding-bottom: 0px;">
                  <h4 class="card-title">Datos del Cliente</h4>
                  <form class="forms-sample">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row" style="margin-bottom: 0px;">
                          <label class="col-sm-3 col-form-label">Identificación</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row" style="margin-bottom: 0px;">
                          <label class="col-sm-3 col-form-label">NIT</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 0px;">
                      <label  class="col-sm-2 col-form-label">Cliente</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row" style="margin-bottom: 0px;">
                          <label class="col-sm-5 col-form-label">Calibres</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group row" style="margin-bottom: 0px;">
                          <label class="col-sm-5 col-form-label">Fecha Vencimiento</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row" style="margin-bottom: 0px;">
                          <label class="col-sm-4 col-form-label">#Propietario</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row" style="margin-bottom: 0px;">
                          <label class="col-sm-2 col-form-label">DPI</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row" style="margin-bottom: 0px;">
                      <label class="col-sm-2 col-form-label">Dirección</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" aria-label="Username">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Armas Registradas</h4>
                  <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="col-form-label" style="padding-bottom: 0px;">Registro #1</label>
                          <div class="col-sm-12" style="padding-left: 0px">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="col-form-label" style="padding-bottom: 0px;">Calibre #1</label>
                          <div class="col-sm-12" style="padding-left: 0px">
                            <select class="form-control">
                              <option>380</option>
                              <option>360</option>
                              <option>240</option>
                              <option>520</option>
                              <option>850</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="col-form-label" style="padding-bottom: 0px;">Registro #2</label>
                          <div class="col-sm-12" style="padding-left: 0px">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="col-form-label" style="padding-bottom: 0px;">Calibre #2</label>
                          <div class="col-sm-12" style="padding-left: 0px">
                            <select class="form-control">
                              <option>380</option>
                              <option>360</option>
                              <option>240</option>
                              <option>520</option>
                              <option>850</option>
                            </select>
                          </div>
                        </div>
                      </div><div class="col-md-2">
                        <div class="form-group">
                          <label class="col-form-label" style="padding-bottom: 0px;">Registro #3</label>
                          <div class="col-sm-12" style="padding-left: 0px">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="col-form-label" style="padding-bottom: 0px;">Calibre #3</label>
                          <div class="col-sm-12" style="padding-left: 0px">
                            <select class="form-control">
                              <option>380</option>
                              <option>360</option>
                              <option>240</option>
                              <option>520</option>
                              <option>850</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Buscar Producto</h4>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nombre del Producto" aria-label="Recipient's username">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-warning" type="button">Buscar</button>
                              <button class="btn btn-sm btn-danger" type="button">Agregar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Nombre
                          </th>
                          <th>
                            No. Registro
                          </th>
                          <th>
                            Disponibilidad
                          </th>
                          <th>
                            Precio Compra
                          </th>
                          <th>
                            Precio Venta
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            1
                          </td>
                          <td>
                            Escopeta 12
                          </td>
                          <td>
                            45457878
                          </td>
                          <td>
                            100
                          </td>
                          <td>
                            450
                          </td>
                          <td>
                            900
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            1
                          </td>
                          <td>
                            Escopeta 12
                          </td>
                          <td>
                            45457878
                          </td>
                          <td>
                            100
                          </td>
                          <td>
                            450
                          </td>
                          <td>
                            900
                          </td>
                        </tr><tr>
                          <td class="py-1">
                            1
                          </td>
                          <td>
                            Escopeta 12
                          </td>
                          <td>
                            45457878
                          </td>
                          <td>
                            100
                          </td>
                          <td>
                            450
                          </td>
                          <td>
                            900
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12 grid-margin">
              <div class="card">
               <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h4 class="card-title">Total</h4>
                    <h1>45 0000</h1>
                  </div>
                  <div class="col-4">
                    <button type="button" class="btn btn-dark btn-lg btn-block">PAGAR</button>
                  </div>
                </div>
                </div>
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
  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
