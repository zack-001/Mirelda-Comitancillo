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

         

          
          <h3 class="card-title">ESTADO DE CUENTA</h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                  <div class="form-group">
                  <label>ID ESTADO DE CUENTA</label>
                  

                  <input type="text" class="form-control"  name="idEdoCuenta"  <?php echo 'value="'.$_GET["idEdoCuenta"].'"'; ?> readonly >
                </div>

                  <label>TOTAL ADEUDADO</label>
                  
                 
                  <input type="text" name="total_adecuado" class="form-control" <?php echo 'value="'.$_GET["total_adecuado"].'"'; ?> >
                </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
         
      

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