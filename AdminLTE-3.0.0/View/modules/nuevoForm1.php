<?php

if(!$_SESSION["nick"]){

  echo '<script> window.location="login";</script>';

  exit();

  }
  else{
  
  }
?>  

<form method="post">
     <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
           <h3 class="card-title">DATOS PERSONALES DEL PACIENTE</h3>    
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
             
                  <label>Nombre</label>                
                  <input type="text" class="form-control" name="nombre"  required="">
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
                <div class="form-group">
                  <label>Fecha de Nacimiento</label>
                  <input type="date" class="form-control" name="edad"  required>
                </div>
               


                <div class="form-group">
                  <label>Fecha de ingreso</label>
                  

                  <input type="date" class="form-control"   name="fechaingreso"  required="">
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
                <div class="form-group">
                  <label>Teléfono</label>
                  

                  <input type="text" class="form-control" pattern="[0-9]{10}"  title="Ingresa un número teléfonico de 10 digitos" name="telefono"  required="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
        <!-- /.card -->

    </div>
  </section>


  <!-- SECCION DATOS TUTOR -->
  <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
           <h3 class="card-title">EN CASO DE EMERGENCIA NOTIFIQUE A:</h3>    
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                
              <div class="form-group">                 
                  <label>Nombre:</label>
                     <input type="text" class="form-control" name="nombreTutor"  required="">
                </div>
                <div class="form-group">                 
                  <label>Parentezco:</label>
                     <input type="text" class="form-control" name="parentezco"  required="">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">                 
                  <label>Telefono:</label>
                     <input type="text" class="form-control" name="numeroTutor"  required="">
                </div>
                </div>
              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="registra" value="Registrar datos del cliente" class="btn btn-success"/>
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
                  
                  
                  <input type="text" class="form-control" name="nick"  required="">
                </div>
                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </div>

               <div class="col-md-6">
              
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Contraseña</label>
                  

                  <input type="password" class="form-control"  name="pass"  required="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
      



              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="registra" value="Registrar datos del cliente" class="btn btn-success"/>
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
$ingreso -> actulizaUsercliente();


if(isset($_GET["action"])){
  if($_GET["action"] == "Nickduplicado"){
        echo '<script>alert("El Nick ya esta registrado");</script>';
      echo '<script> window.location="iniciouser";</script>';
    } 
    elseif($_GET["action"] == "ErrorCliente"){
        echo '<script>alert("Hubo un error en los datos del cliente, por favor intente de nuevo");</script>';
      echo '<script> window.location="iniciouser";</script>';
    }
    elseif($_GET["action"] == "ErrorUser"){
        echo '<script>alert("Hubo un error en los datos del usuario, por favor intente de nuevo");</script>';
      echo '<script> window.location="iniciouser";</script>'; 
    }
    elseif($_GET["action"] == "errorFecha"){
        echo '<script>alert("Hubo un error, no puede seleccionar una fecha anterior");</script>';
      echo '<script> window.location="iniciouser";</script>'; 
    } 
   
 } 
