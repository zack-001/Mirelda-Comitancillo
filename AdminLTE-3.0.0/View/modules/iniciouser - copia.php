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


     <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">

           <?php
           if ($_SESSION["idUsuarioCliente"] > 0) {
               echo '<h3 class="card-title">BIENVENIDO AL PANEL DE CLINICA DENTAL</h3>';
             } 

             else{
              echo '<h3 class="card-title">ACTUALIZACIÓN DE DATOS PERSONALES (NECESARIO)</h3>';
             } 

           ?>


            

            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <?php  if ($_SESSION["idUsuarioCliente"] > 0){
                        echo "";
                  }
                  else{

                 echo '<form method="post">
                  <label>Nombre</label>
                  
                  <input type="hidden" class="form-control" name="id"  value="'.$_SESSION["idUsuario"].'" required="">
                  <input type="text" class="form-control" name="nombre" value="'.$_SESSION["nombre"].'" required="">
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Telefono</label>
                  

                  <input type="text" class="form-control" pattern="[0-9]{10}" placeholder="Teléfono" title="Ingresa un número teléfonico de 10 digitos" name="telefono"  required="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Edad</label>
                  

                  <input type="number" class="form-control" name="edad"  required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Sexo</label>
                  <select class="form-control select2" name="sexo"  style="width: 100%;">
                    <option selected="selected">Selecciona una opción</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                   
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Dirección</label>
                  

                  <input type="text" class="form-control" name="direccion"  required="">
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Alergias</label>
                  

                  <input type="text" class="form-control"  name="alergias"  required="">
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo de sangre</label>
                  <select class="form-control select2" name="sangre"  style="width: 100%;">
                    <option selected="selected">Selecciona una opción</option>
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
                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </div>

              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="actualiza" value="Actualizar datos" class="btn btn-success"/>
                </div>
              </div>
            </form>';

          }
      ?>     
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
$ingreso -> actulizaUsercliente();


if(isset($_GET["action"])){
  if($_GET["action"] == "OkCliente"){
        echo '<script>alert("Datos actulizados correctamente");</script>';
      echo '<script> window.location="iniciouser";</script>';
    } 
    if($_GET["action"] == "ErrorCliente"){
        echo '<script>alert("Hubo un error, por favor intente de nuevo");</script>';
      echo '<script> window.location="iniciouser";</script>';
    } 
   
 } 
