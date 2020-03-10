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

         

          
          <h3 class="card-title">ABONO A CUENTA <strong><?php echo $_GET["nombre"]; ?></strong></h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">

                <div class="form-group">
                  <label>TOTAL ADEUDADO</label>
                 
                  <input type="text" name="total_adecuado" class="form-control" <?php echo 'value="'.$_GET["total_adecuado"].'"'; ?> readonly >
                  </div>
                </div>
                 <div class="form-group">
              
               <label>TRATAMIENTO</label>
                  
                 
                  <input type="text" name="tratamiento" class="form-control" <?php echo 'value="'.$_GET["tratamiento"].'"'; ?> readonly >
               </div>
                <div class="form-group">
                  <label>ABONAR</label>                                   
                  <input type="text" name="abono" class="form-control"  >

                </div>
                <div class="form-group">
                <input type="hidden" class="form-control"  name="idCliente"  <?php echo 'value="'.$_GET["idCliente"].'"'; ?> >
                </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
         
      

              <!-- /.col -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="abonar" value="Abonar" class="btn btn-success"/>
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
$ingreso -> abonarEdocuenta(); 
//$datosc= array("id"=>$_GET['cita'],
//"estado"=>$_GET["estado"]);     
//$ingreso= DatosAdmin::updateEstadoCita($datosc);  }

/*if(isset($_GET["action"])){
  if($_GET["action"] == "MaxAbono"){
        
    }   
 }*/ 