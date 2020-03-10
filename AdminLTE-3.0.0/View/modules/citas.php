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

         

          
          <h3 class="card-title">CITA PARA EL PACIENTE <strong><?php echo $_GET["nombre"]; ?></h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                  <div class="form-group">
                  <label>Fecha de cita</label>
                  <input type="hidden" class="form-control"  name="estado"  value="PENDIENTE"  >
                  <input type="hidden" class="form-control"  name="idCliente"  <?php echo 'value="'.$_GET["idCliente"].'"'; ?>  >
                  <input type="date" class="form-control"  name="fecha_cita" required=""  >
                </div>

                  <label>Costo de la cita ($)</label>
                  
                 
                  <input type="number" class="form-control"  title="Ingresa solamente el monto" name="costo_cita" required=""  >
                </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Fecha de proximo cita</label>
                  <input type="date" class="form-control"  name="fecha_prox_cita">
                </div>
                <div class="form-group">
                        <label>Observaciones</label>
                        <textarea class="form-control" rows="3" name="observaciones" required="" placeholder="Alguna observación en la cita"></textarea>
                      </div>
                <!-- /.form-group -->
             
                <!-- /.form-group -->
              </div>
      

              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="programacion" value="Programar cita" class="btn btn-success"/>
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

$ingreso = new DentalAdmin();
$ingreso -> ProgramacionCitas(); 

if(isset($_GET["action"])){
  // echo(array_key_exists("fecha_prox_cita", $_GET));
    if($_GET["action"] == "errorFechaCita"){
        echo '<script>alert("Hubo un error, no puede agendar una cita con fecha atrasada");</script>';
      echo '<script> window.location="index.php?action=citas&idCliente='.$_GET["idCliente"].'&nombre='.$_GET["nombre"].'";</script>';
    }
    elseif($_GET["action"] == "errorFechaproximoCita"){
        echo '<script>alert("Hubo un error, no puede agendar una proxima cita con fecha atrasada");</script>';
      echo '<script> window.location="index.php?action=citas&idCliente='.$_GET["idCliente"].'&nombre='.$_GET["nombre"].'";</script>';
    }
    elseif($_GET["action"] == "Okcitaprogramada"){
        echo '<script>alert("Cita programada de manera correcta");</script>';
      echo '<script> window.location="Citasrealizadas";</script>';
    }
    elseif($_GET["action"] == "Errorcitaprogramada"){
        echo '<script>alert("Hubo un error, por favor intente de nuevo");</script>';
      echo '<script> window.location="index.php?action=citas&idCliente='.$_GET["idCliente"].'&nombre='.$_GET["nombre"].'";</script>';
    }
    elseif($_GET["action"] == "errorFechaproximoigualaCita"){
        echo '<script>alert("Hubo un error, no puede agendar una proxima cita el mismo dia de la cita");</script>';
      echo '<script> window.location="index.php?action=citas&idCliente='.$_GET["idCliente"].'&nombre='.$_GET["nombre"].'";</script>';
    }
    
   
 } 