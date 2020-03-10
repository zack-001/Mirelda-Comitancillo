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
              <h3 class="card-title">LISTA DE TIPOS DE TRATAMIENTO</h3>
            </div>


          <div class="card">
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID TRATAMIENTO</th>
                  <th>DESCRIPCIÓN</th>
                  <th>COSTO</th>
                  <th>MÉDICO</th>
                  <th>ESPECIALIDAD</th>
                  <th>ACTUALIZAR</th>
                  <th>ELIMINAR</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalUserAdmin();
               // $listalibrosvirtual -> listadoDoc();
                $listalibrosvirtual -> listadoTratamientos();
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
  if($_GET["action"] == "Oktipotratamiento"){
        echo '<script>alert("Datos guardados correctamente");</script>';
      echo '<script> window.location="listadotratamiento";</script>';
    }
    elseif($_GET["action"] == "updateTratamiento"){
        echo '<script>alert("Datos actualizados correctamente");</script>';
      echo '<script> window.location="listadotratamiento";</script>';
    }
    elseif($_GET["action"] == "errorTratamiento"){
        echo '<script>alert("Error intente otra vez por favor");</script>';
      echo '<script> window.location="listadotratamiento";</script>';
    }

    elseif($_GET["action"] == "deleteoktipoTramientos"){
        echo '<script>alert("Datos eliminados correctamente");</script>';
      echo '<script> window.location="listadotratamiento";</script>';
    }
    elseif($_GET["action"] == "deleteerrortipoTramientos"){
        echo '<script>alert("Error intente otra vez por favor");</script>';
      echo '<script> window.location="listadotratamiento";</script>';
    } 

   
 }  
    ?>