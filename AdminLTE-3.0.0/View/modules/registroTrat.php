  <?php

if(!$_SESSION["nick"]){

  echo '<script> window.location="login";</script>';

  exit();

  }
  else{
  
  }
?> 


     <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">

         

          
          <h3 class="card-title">REGISTRO DE TRATAMIENTOS</h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                  <div class="form-group">
                  <label>Tratamiento</label>
                  

                  <input type="text" class="form-control"  name="tratamiento" required=""  >
                </div>

                  <label>Costo</label>
                  
                 
                  <input type="text" class="form-control"  title="Ingresa solamente el monto" name="costo" required=""  >
                </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Médico</label>
                  

                 <select class="form-control select2" name="medico"  style="width: 100%;">
                    <option selected="selected">Selecciona una opción</option>
                       <?php
                      $tratamiento = new DentalUserAdmin();
                      $tratamiento->listaDocUser();
                    ?>
                   
                  </select>
                </div>
                <!-- /.form-group -->
             
                <!-- /.form-group -->
              </div>
      

              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="registro" value="Actualizar datos" class="btn btn-success"/>
                </div>
              </div>
            </form>
            <!-- /.row -->


            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
        <!-- /.card -->

    </div>
  </section>
   <?php

$ingreso = new DentalUserAdmin();
$ingreso -> registrotratamientosDoc(); 

if(isset($_GET["action"])){
   
    if($_GET["action"] == "Errortipotratamiento"){
        echo '<script>alert("Hubo un error, por favor intente de nuevo");</script>';
      echo '<script> window.location="registroTrat";</script>';
    }
    
   
 } 