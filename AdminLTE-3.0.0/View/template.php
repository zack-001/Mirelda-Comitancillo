<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PANEL CLINICA DENTAL | CLINICA DENTAL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="View/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="View/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="View/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="View/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="View/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="View/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="View/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="View/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="View/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
      
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link"  data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <?php 
if ($_GET["action"] == "login" || $_GET["action"] == "logout") {
                        echo "";
                    }
elseif ($_GET["action"] == "datosUser" || $_GET["action"] == "iniciouser" || $_GET["action"] == "listadocitasUser" || $_GET["action"] == "listadoEdocuentaUser" || $_GET["action"] == "listadoabonosUser") { 
                        echo 
                
                '  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="View/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Clinica Dental</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="View/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuario</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
     
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Mi panel
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="iniciouser" class="nav-link">
                 <i class="fas fa-home"></i></i>&nbsp;&nbsp;
                  <p>Inicio</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="datosUser" class="nav-link">
                 <i class="fas fa-user-edit"></i></i>&nbsp;&nbsp;
                  <p>Datos personales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?action=listadocitasUser&iduser='.$_SESSION["idUsuario"].'" class="nav-link">
                  <i class="fas fa-laptop-medical"></i>&nbsp;&nbsp;
                  <p>Listado de citas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?action=listadoEdocuentaUser&iduser='.$_SESSION["idUsuario"].'" class="nav-link">
                  <i class="fas fa-cash-register"></i>&nbsp;&nbsp;
                  <p>Consultar Estados de Cuenta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?action=listadoabonosUser&iduser='.$_SESSION["idUsuario"].'" class="nav-link">
                  <i class="fas fa-coins"></i>&nbsp;&nbsp;
                  <p>Consultar Abonos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;

                  <p>Cerrar Sesión</p>
                </a>
              </li>
            </ul>
          </li>
      


    
 
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> ';
 }

 elseif ($_GET["action"] == "inicioAdmin" || $_GET["action"] == "registroDoc" || $_GET["action"] == "listadoDoc" || $_GET["action"] == "actualizaDoc" || $_GET["action"] == "eliminaDoc" || $_GET["action"] == "registroTrat" || $_GET["action"] == "listadotratamiento" || $_GET["action"] == "actualizatipoTrat" || $_GET["action"] == "eliminatipoTrat" || $_GET["action"] == "listadoCliente" || $_GET["action"] == "modificauser" || $_GET["action"] == "deleteDatos" || $_GET["action"] == "citas" || $_GET["action"] == "Citasrealizadas" || $_GET["action"] == "agregaCita" || $_GET["action"] == "totalValoracion" || $_GET["action"] == "ingresos" || $_GET["action"] == "IngresoFecha" || $_GET["action"] == "consultaClienteabono" || $_GET["action"] == "mostraredoCuenta" || $_GET["action"] == "viewClientes" || $_GET["action"] == "edocuenta" || $_GET["action"] == "abonos" || $_GET["action"] == "iniciouserAdmin" || $_GET["action"] == "historial") { 
                        echo 
                
                '  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="View/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Clinica Dental</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="View/dist/img/descarga.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuario</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
     
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Clientes
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="inicioAdmin" class="nav-link">
                 <i class="fas fa-home"></i></i>&nbsp;&nbsp;
                  <p>Inicio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="iniciouserAdmin" class="nav-link">
                 <i class="fas fa-user-plus"></i>&nbsp;&nbsp;
                  <p>Registrar Cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="listadoCliente" class="nav-link">
              <i class="fas fa-users"></i>
&nbsp;&nbsp;
                  <p>Listado de Clientes</p>
                </a>
              </li>
            </ul>
          </li>

          <!--segundo menu -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Medicos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="registroDoc" class="nav-link">
                 <i class="fas fa-user-md"></i></i>&nbsp;&nbsp;
                  <p>Registrar Médico</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="listadoDoc" class="nav-link">
                <i class="fas fa-id-card-alt"></i>
&nbsp;&nbsp;
                  <p>Listado de Médicos</p>
                </a>
              </li>
            </ul>
          </li>
      
       <!-- fin segundo menu -->

       <!--terce menu -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-syringe"></i>
              <p>
                Tratamientos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="registroTrat" class="nav-link">
                 <i class="fas fa-tooth"></i>&nbsp;&nbsp;
                  <p>Registrar tratamientos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="listadotratamiento" class="nav-link"> 
             <i class="fas fa-notes-medical"></i>&nbsp;&nbsp;
                  <p>Listado de tratamientos</p>
                </a>
              </li>
            </ul>
          </li>
      
       <!-- fin tercer menu -->

              <!--cuarto menu -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Citas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="Citasrealizadas" class="nav-link">
                  <i class="fas fa-laptop-medical"></i>&nbsp;&nbsp;
                  <p>Listado de citas</p>
                </a>
              </li>
            </ul>
          </li>
      
       <!-- fin cuarto menu -->


              <!--quinto menu -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-donate"></i>
              <p>
                Administración
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="ingresos" class="nav-link">
                  <i class="fas fa-chart-line"></i>&nbsp;&nbsp;
                  <p>Consultar Ingresos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="edocuenta" class="nav-link">
                  <i class="fas fa-cash-register"></i>&nbsp;&nbsp;
                  <p>Consultar Estados de Cuenta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="abonos" class="nav-link">
                  <i class="fas fa-coins"></i>&nbsp;&nbsp;
                  <p>Consultar Abonos</p>
                </a>
              </li>
            </ul>
          </li>
      
       <!-- fin quinto menu -->


         <!--sexto menu -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-shield"></i>
              <p>
                Sesión
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">          
              <li class="nav-item">
                <a href="logout" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;

                  <p>Cerrar Sesión</p>
                </a>
              </li>
            </ul>
          </li>
      
       <!-- fin sexto menu -->

    
 
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> ';
 }






?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <?php   
    if ($_GET["action"] == "iniciouser") { 
                        echo '
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CLINICA DENTAL</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">INICIO</a></li>
          
              <li class="breadcrumb-item active">USUARIO</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>';
  }
  elseif ($_GET["action"] == "datosUser") { 
                        echo '
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CLINICA DENTAL</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PANEL</a></li>
          
              <li class="breadcrumb-item active">DATOS DEL CLIENTE</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>';
  }
?>
    <!-- Main content -->
      <?php
      $dental = new DentalAdmin();
      $dental -> enlacesPaginas();
      ?>

    <!-- /.content -->
  </div>




  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> <a href="#">CLINICA DENTAL COMITANCILLO</a>.</strong>
   
    <div class="float-right d-none d-sm-inline-block">
      <b></b> 
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="View/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="View/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="View/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="View/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="View/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="View/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="View/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="View/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="View/plugins/moment/moment.min.js"></script>
<script src="View/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="View/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="View/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="View/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="View/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="View/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="View/dist/js/demo.js"></script>

<script src="View/plugins/datatables/jquery.dataTables.js"></script>
<script src="View/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script src="View/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
