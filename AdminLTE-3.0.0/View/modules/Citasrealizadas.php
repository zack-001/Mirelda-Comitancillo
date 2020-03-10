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
              <h3 class="card-title">LISTA DE CITAS AL DIA DE HOY</h3>
            </div>


          <div class="card">
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CLIENTE</th>
                  <th>FECHA DE CITA PROGRAMA</th>
                  <th>AGREGAR TRATAMIENTO</th> 
                  <th>ESTADO</th>
                  <th>ABONAR</th>               
                  <th>ELIMINAR CITA</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalUserAdmin();
               // $listalibrosvirtual -> listadoDoc();
                $listalibrosvirtual -> listaCitahoy();
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
  if($_GET["action"] == "Okcitaprogramada"){
        echo '<script>alert("Datos guardados correctamente");</script>';
      echo '<script> window.location="Citasrealizadas";</script>';
    }

    elseif($_GET["action"] == "CuentaOk"){
        echo '<script>alert("Datos guardados correctamente");</script>';
      echo '<script> window.location="Citasrealizadas";</script>';
    }

    elseif($_GET["action"] == "ErrorCuenta"){
        echo '<script>alert("Hubo un error al guardar los datos del estado de cuenta");</script>';
      echo '<script> window.location="Citasrealizadas";</script>';
    }

    elseif($_GET["action"] == "ErrorValoracion"){
        echo '<script>alert("Hubo un error al guardar los datos de valoración");</script>';
      echo '<script> window.location="Citasrealizadas";</script>';
    }
   
 }  
    ?>