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

         

          
          <h3 class="card-title">ACTUALIZACIÓN DE TIPOS DE TRATAMIENTO </h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                  <div class="form-group">
                  <label>Id tipo tratamiento</label>
                  

                  <input type="text" class="form-control" <?php echo 'value="'.$_GET["idTipoTratamiento"].'"'; ?>  name="idTipoTratamiento" readonly  >
                </div>

                  <label>Descripción</label>
                  
                 
                  <input type="text" class="form-control" <?php echo 'value="'.$_GET["descripcion"].'"'; ?> name="descripcion"  >
                </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Costo</label>
                  

                  <input type="text" class="form-control"  <?php echo 'value="'.$_GET["costo"].'"'; ?>  name="costo"  >
                </div>

                <div class="form-group">
                  <label>Médico</label>
                  

                 <select class="form-control select2" name="idmedico"  style="width: 100%;">
                    <option  <?php echo 'value="'.$_GET["idmedico"].'"'; ?> selected="selected"><?php echo ''.$_GET["nombre"].''; ?></option>
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
$ingreso -> actualizaciontipoTraminetos(); 



