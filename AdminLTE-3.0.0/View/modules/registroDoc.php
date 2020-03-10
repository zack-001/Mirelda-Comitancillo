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

         

          
          <h3 class="card-title">DATOS PERSONALES </h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                  <div class="form-group">
                  <label>Id</label>
                  

                  <input type="text" class="form-control"  name="id" required=""  >
                </div>

                  <label>Especialidad</label>
                  
                 
                  <input type="text" class="form-control" name="especialidad" required=""  >
                </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nombre</label>
                  

                  <input type="text" class="form-control"  name="nombre" required=""  >
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
$ingreso -> registroDoc(); 



if(isset($_GET["action"])){
   
    if($_GET["action"] == "ErrorDoc"){
        echo '<script>alert("Hubo un error, por favor intente de nuevo");</script>';
      echo '<script> window.location="registroDoc";</script>';
    }
    elseif($_GET["action"] == "duplicadoDoc"){
        echo '<script>alert("Hubo un error, el ID ya esdta registrado");</script>';
      echo '<script> window.location="registroDoc";</script>';
    } 
   
 } 