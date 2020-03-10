<?php

if(!$_SESSION["nick"]){

  echo '<script> window.location="login";</script>';

  exit();

  }
  else{
  
  }
?>  
  <!--  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

               
              </div>
              <div class="card-body">
               BIENVENIDO AL PANEL DE CLINICA DENTAL
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer
            </div>
            <!-- /.card 
          </div>
        </div>
      </div>
    </section> -->


      <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">LISTA DE TIPOS DE CLIENTES</h3>
            </div>


          <div class="card">
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NOMBRE DEL CLIENTES</th>
                
                  <th>NICK</th>
                  <th>DATOS COMPLETOS</th>
                  <th>REALIZAR CITAS</th>
                  <th>HISTORIAL</th>
                  <th>REALIZAR ABONOS</th>
                  <th>ACTUALIZAR</th>
                  <th>ELIMINAR</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalAdmin();
               // $listalibrosvirtual -> listadoDoc();
                $listalibrosvirtual -> listadoClientes();
                ?>
                </tbody>
                <tfoot>
              
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <?php
    if(isset($_GET["action"])){
  if($_GET["action"] == "OkCliente"){
        echo '<script>alert("Datos guardados correctamente");</script>';
      echo '<script> window.location="listadoCliente";</script>';
    }
    elseif($_GET["action"] == "Okrefresh"){
        echo '<script>alert("Datos actualizados correctamente");</script>';
      echo '<script> window.location="listadoCliente";</script>';
    } 
    elseif($_GET["action"] == "errorRefresh"){
        echo '<script>alert("Hubo un error en los datos del cliente, por favor intente de nuevo");</script>';
      echo '<script> window.location="listadoCliente";</script>';
    }
    elseif($_GET["action"] == "ErrorrefreshUser"){
        echo '<script>alert("Hubo un error en los datos del usuario, por favor intente de nuevo");</script>';
      echo '<script> window.location="listadoCliente";</script>'; 
    }
    elseif($_GET["action"] == "deleteOKtodo"){
        echo '<script>alert("Datos eliminados de manera correcta");</script>';
      echo '<script> window.location="listadoCliente";</script>'; 
    }
    elseif($_GET["action"] == "ErrordeleteUser"){
        echo '<script>alert("Hubo un error al borrar los datos del usuario, por favor intente de nuevo");</script>';
      echo '<script> window.location="listadoCliente";</script>'; 
    }
    elseif($_GET["action"] == "ErrordeleteCliente"){
        echo '<script>alert("Hubo un error al borrar los datos del usuario, por favor intente de nuevo");</script>';
      echo '<script> window.location="listadoCliente";</script>'; 
    }


    elseif($_GET["action"] == "edocuentapagada"){
        echo '<script>alert("Su estado de cuenta está en cero, no puede realizar abonos");</script>';
      echo '<script> window.location="listadoCliente";</script>'; 
    }
    elseif($_GET["action"] == "abonomayorque"){
        echo '<script>alert("No puede abonar un monto mayor al de su estado de cuenta");</script>';
      echo '<script> window.location="listadoCliente";</script>'; 
    }
    elseif($_GET["action"] == "OkAbono"){
        echo '<script>alert("Realizó un abono de manera correcta");</script>';
      echo '<script> window.location="listadoCliente";</script>'; 
    }
    elseif($_GET["action"] == "ErrorAbono"){
        echo '<script>alert("Hubo un error intente de nuevo por favor");</script>';
      echo '<script> window.location="listadoCliente";</script>'; 
    } 
   
  
   
   
 }  
 