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

         

          
          <h3 class="card-title">ACTUALIZACIÓN DE DATOS PERSONALES </h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                  <div class="form-group">
                  <label>Id</label>
                  

                  <input type="text" class="form-control" <?php echo 'value="'.$_GET["id"].'"'; ?>  name="id" readonly  >
                </div>

                  <label>Especialidad</label>
                  
                 
                  <input type="text" class="form-control" <?php echo 'value="'.$_GET["especialidad"].'"'; ?> name="especialidad"  >
                </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nombre</label>
                  

                  <input type="text" class="form-control"  <?php echo 'value="'.$_GET["nombre"].'"'; ?>  name="nombre"  >
                </div>
                <!-- /.form-group -->
             
                <!-- /.form-group -->
              </div>
      

              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="update" value="Actualizar datos" class="btn btn-success"/>
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
$ingreso -> actualizacionDoc(); 



