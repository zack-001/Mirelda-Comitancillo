 <?php

if(!$_SESSION["nick"]){

  echo '<script> window.location="login";</script>';

  exit();

  }
  else{
  
  }
?>  
  <!--  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

               
              </div>
              <div class="card-body">
               BIENVENIDO AL PANEL DE CLINICA DENTAL
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer
            </div>
            <!-- /.card 
          </div>
        </div>
      </div>
    </section> -->


<form method="post">
     <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
           <h3 class="card-title">ACTUALIZACIÓN DE DATOS PERSONALES DEL CLIENTE</h3>    
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
  

              
                  <label>Nombre</label>
                  <input type="hidden" class="form-control" name="idUsuario" <?php echo 'value="'.$_GET["idUsuario"].'"'; ?>  >
                  <input type="hidden" class="form-control" name="idCliente" <?php echo 'value="'.$_GET["idCliente"].'"'; ?>  >
                  <input type="text" class="form-control" name="nombre" <?php echo 'value="'.$_GET["nombre"].'"'; ?>  >
                </div>
                <!-- /.form-group -->
              
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
             
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Sexo</label>
                  <select class="form-control select2" name="sexo"  style="width: 100%;">
                    <option <?php echo 'value="'.$_GET["sexo"].'"'; ?> selected="selected"><?php echo ''.$_GET["sexo"].''; ?></option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                   
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Dirección</label>
                  

                  <input type="text" class="form-control" name="direccion"  <?php echo 'value="'.$_GET["direccion"].'"'; ?> >
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Alergias</label>
                  

                  <input type="text" class="form-control"  name="alergias"  <?php echo 'value="'.$_GET["alergias"].'"'; ?> >
                </div>
                <div class="form-group">
                  <label>Edad</label>
                  

                  <input type="number" class="form-control" name="edad"   <?php echo 'value="'.$_GET["edad"].'"'; ?> >
                </div>
               


           

                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo de sangre</label>
                  <select class="form-control select2" name="sangre"  style="width: 100%;">
                    <option  <?php echo 'value="'.$_GET["tipoSangre"].'"'; ?> selected="selected"> <?php echo ''.$_GET["tipoSangre"].''; ?></option>
                    <option value="A positivo">A positivo</option>
                    <option value="A negativo">A negativo</option>
                    <option value="B positivo">B positivo</option>
                    <option value="B negativo">B negativo</option>
                    <option value="O positivo">O positivo</option>
                    <option value="O negativo">O negativo</option>
                    <option value="AB positivo">AB positivo</option>
                    <option value="AB negativo">AB negativo</option>
                   
                  </select>
                </div>
                <div class="form-group">
                  <label>Teléfono</label>
                  

                  <input type="text" class="form-control" <?php echo 'value="'.$_GET["telefono"].'"'; ?> name="telefono" >
                </div>
              

                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </div>

              <!-- /.col -->
            </div>
       
            
            <!-- /.row -->


            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
        <!-- /.card -->

    </div>
  </section>

   <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
           <h3 class="card-title">DATOS DE USUARIO</h3>    
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
  

                 
                  <label>Nick</label>
                  
                  
                  <input type="text" class="form-control" name="nick"   <?php echo 'value="'.$_GET["nick"].'"'; ?>  readonly >
                </div>
                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </div>

               <div class="col-md-6">
              
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Contraseña</label>
                  

                  <input type="text" class="form-control"  name="pass"  <?php echo 'value="'.$_GET["pass"].'"'; ?> >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
      



              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="actualiza" value="Actualizar datos del cliente" class="btn btn-success"/>
                </div>
              </div>
          
            <!-- /.row -->


            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
        <!-- /.card -->

    </div>
  </section>
</form >
   <?php

$ingreso = new DentalAdmin();
//$ingreso -> registroUser(); 
$ingreso -> refreshCliente();



