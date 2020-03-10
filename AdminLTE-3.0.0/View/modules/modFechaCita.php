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
          <h3 class="card-title">AGREGAR FECHA PROXIMA CITA <strong><?php echo $_GET["nombrecliente"]; ?></strong></h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                
                <form method="post">
                   <input type="hidden" class="form-control"  name="idcliente"  <?php echo 'value="'.$_GET["idcliente"].'"'; ?>  >
                   <input type="hidden" class="form-control"  name="id"  <?php echo 'value="'.$_GET["idcita"].'"'; ?>  >
                   <input type="hidden" class="form-control"  name="nombrecliente"  <?php echo 'value="'.$_GET["nombrecliente"].'"'; ?>  >
                    <div class="form-group">
                      <label>Proxima cita: </label>
                      <input type="date" class="form-control"  name="prox_cita" required=""  >        
                    </div>

                 
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="submit" name="enviar" value="Enviar datos" class="btn btn-success"/>
                        </div>
                    </div>
                </form>
              </div>
            <!-- /.row -->
            </div>
          <!-- /.card-body -->
          </div>
        <!-- /.card -->
        </div>
    </div>
  </section>
   <?php

$ingreso = new DentalAdmin();
$ingreso -> datosUpdateFechaCita(); 

