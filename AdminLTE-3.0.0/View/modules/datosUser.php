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

         

          
          <h3 class="card-title">DATOS PERSONALES</h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                  <label>Nombre</label>
                  
                  <input type="hidden" class="form-control" name="id"    <?php echo 'value="'.$_SESSION["idUsuario"].'"'; ?>   >
                  <input type="text" class="form-control" name="nombre"  <?php echo 'value="'.$_SESSION["nombrecliente"].'"';  ?> readonly >
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Telefono</label>
                  

                  <input type="text" class="form-control" <?php echo 'value="'.$_SESSION["telefono"].'"'; ?>  name="telefono" readonly >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Edad</label>
                  

                  <input type="number" class="form-control" <?php echo 'value="'.$_SESSION["edad"].'"'; ?> name="edad" readonly >
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Sexo</label>
                  <select class="form-control select2" name="sexo"  style="width: 100%;" readonly>
                    <option selected="selected"><?php echo ''.$_SESSION["sexo"].''; ?></option>
                   
                   
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Dirección</label>
                  

                  <input type="text" class="form-control" <?php echo 'value="'.$_SESSION["direccion"].'"'; ?> name="direccion" readonly >
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Alergias</label>
                  

                  <input type="text" class="form-control" <?php echo 'value="'.$_SESSION["alergias"].'"'; ?> name="alergias" readonly >
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo de sangre</label>
                  <select class="form-control select2" name="sangre"  style="width: 100%;" readonly>
                    <option selected="selected"><?php echo ''.$_SESSION["tipoSangre"].''; ?></option>
                  
                   
                  </select>
                </div>
                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </div>

              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
             <!--     <input type="submit" name="actualiza" value="Actualizar datos" class="btn btn-success"/> -->
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
//$ingreso -> registroUser(); 
$ingreso -> actulizadatosUsercliente();


if(isset($_GET["action"])){
  if($_GET["action"] == "OkupdateCliente"){
        echo '<script>alert("Datos actulizados correctamente");</script>';
      echo '<script> window.location="datosUser";</script>';
    } 
    if($_GET["action"] == "ErrorupdateCliente"){
        echo '<script>alert("Hubo un error, por favor intente de nuevo");</script>';
      echo '<script> window.location="datosUser";</script>';
    } 
   
 } 