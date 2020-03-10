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
              <h3 class="card-title">LISTA DE DOCTORES REGISTRADOS</h3>
            </div>


          <div class="card">
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID MÉDICO</th>
                  <th>NOMBRE</th>
                  <th>ESPECIALIDAD</th>
                  <th>ACTUALIZAR</th>
                  <th>ELIMINAR</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listalibrosvirtual = new DentalUserAdmin();
                $listalibrosvirtual -> listadoDoc();
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
  if($_GET["action"] == "OkupdateDoc"){
        echo '<script>alert("Datos actualizados correctamente");</script>';
      echo '<script> window.location="listadoDoc";</script>';
    } 
    elseif($_GET["action"] == "ErrorupdateDoc"){
        echo '<script>alert("Hubo un error, por favor intente de nuevo");</script>';
      echo '<script> window.location="actualizaDoc";</script>';
    }
    elseif($_GET["action"] == "OkDoc"){
        echo '<script>alert("Datos registrados correctamente");</script>';
      echo '<script> window.location="listadoDoc";</script>';
    }
    elseif($_GET["action"] == "deleteokDoc"){
        echo '<script>alert("El médico ha sido eliminado de manera correcta");</script>';
      echo '<script> window.location="listadoDoc";</script>';
    }
    elseif($_GET["action"] == "deleteerrorDoc"){
        echo '<script>alert("Hubo un error, no se pudo eliminar");</script>';
      echo '<script> window.location="listadoDoc";</script>';
    } 
   
 }  
    ?>