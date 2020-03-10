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

         

          
          <h3 class="card-title">ALTA DE TRATAMIENTOS PARA EL PACIENTE <strong><?php echo $_GET["nombrecliente"]; ?></strong></h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                   <input type="hidden" class="form-control"  name="idcliente"  <?php echo 'value="'.$_GET["idcliente"].'"'; ?>  >
                   <input type="hidden" class="form-control"  name="idcita"  <?php echo 'value="'.$_GET["idcita"].'"'; ?>  >
                   <input type="hidden" class="form-control"  name="nombrecliente"  <?php echo 'value="'.$_GET["nombrecliente"].'"'; ?>  >
                   <input type="hidden" class="form-control"  name="total"  <?php echo 'value="'.$_GET["total"].'"'; ?>  >
                  <div class="form-group">
                  <label>Tratamiento</label>
                  <select class="form-control select2" name="idtratamiento"  style="width: 100%;">
                    <option selected="selected">Selecciona una opción</option>
                       <?php
                      $tratamiento = new DentalUserAdmin();
                      $tratamiento->listaTratamientos();
                    ?>
                   
                  </select>
               
               
                </div>
                <div class="form-group">
                  <label>Costo Unitario</label>
                  <input type="number" class="form-control"  name="costo" required=""  >
                </div>
                 
                </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Cantidad de tratamiento</label>
                  <input type="number" class="form-control"  name="cantidad" required=""  >
                </div>
                <div class="form-group">
                  <label>Organos Dentarios</label>
                  <input type="text" class="form-control"  name="organosDentarios"  >
                </div>
                <!-- /.form-group -->
             
                <!-- /.form-group -->
              </div>
      

              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="enviar" value="Enviar datos" class="btn btn-success"/>
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
$ingreso -> datosValoracioncita2(); 

