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

         

          
          <h3 class="card-title">CONSULTA DE INGRESO DE CITAS POR FECHA</h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                 
                  <div class="form-group">
                  <label>Fecha</label>
                   <input type="date" class="form-control"  name="fecha" required="" >
                 </div>
            
               
                </div>

                 
             
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
          
      

              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="consulta" value="Consultar" class="btn btn-success"/>
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
//$ingreso -> datosValoracioncita();
$ingreso -> consultaIngresoxfecha(); 

