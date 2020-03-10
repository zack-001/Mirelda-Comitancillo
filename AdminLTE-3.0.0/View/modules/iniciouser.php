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
           <h3 class="card-title">BIENVENIDO A SU PORTAL ESTIMADO USUARIO</h3>    
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
   
       
            
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
