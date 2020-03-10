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

         

          
          <h3 class="card-title">DATOS DE PAGO PARA EL PACIENTE <strong><?php echo $_GET["nombrecliente"]; ?></strong></h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                
                <form method="post">
                   <input type="hidden" class="form-control"  name="idcita"  <?php echo 'value="'.$_GET["idcita"].'"'; ?>  >
                   <input type="hidden" class="form-control"  name="idtratamiento"  <?php echo 'value="'.$_GET["idtratamiento"].'"'; ?>>
                   <input type="hidden" class="form-control"  name="estado"  value="ACTIVO" > 
                  <input type="hidden" class="form-control"  name="idcliente"  <?php echo 'value="'.$_GET["idcliente"].'"'; ?>
                     >   
                  <input type="hidden" class="form-control"  name="nombrecliente"  <?php echo 'value="'.$_GET["nombrecliente"].'"'; ?>>   
                  <div class="form-group">
                  <label>Tratamiento</label>
                   <input type="text" class="form-control"  name="descripcion" <?php echo 'value="'.$_GET["descripcion"].'"'; ?> readonly >
                 </div>
              
                <div class="form-group">
                  <label>Cantidad de tratamiento</label>
                  <input type="text" class="form-control"  name="cantidad" <?php echo 'value="'.$_GET["cantidad"].'"'; ?> readonly  >
                </div>
                <div class="form-group">
                  <label>Organos Dentarios</label>
                  <input type="text" class="form-control"  name="organosDentarios"  <?php echo 'value="'.$_GET["organosDentarios"].'"'; ?>   >
                </div>
                  <div class="form-group" style="display: flex;flex-direction:row;">
                  <label>Descuento: </label>
                  <input type="number" class="form-control"  name="descuento"  <?php echo 'value="'.$_GET["descuento"].'"'; ?>   style="margin-left:10px" >
                  <input type="submit" name="recalcular" value="Recalcular total" class="btn btn-success" style="margin-left:10px"/>
                </div>
               
                </div>

                 
             
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Medico</label>
                  <input type="text" class="form-control"  name="medico" <?php echo 'value="'.$_GET["nombre"].'"'; ?> readonly  >
                </div>
              <div class="form-group">
                  <label>Costo Unitario</label>
                  <input type="text" class="form-control"  name="costo" <?php echo 'value="'.$_GET["costo"].'"'; ?> readonly  >
                </div>
                
                            
              </div>

              <div class="col-md-6">

                
               <div class="form-group">
                  <label>Total a pagar</label>
                  <input type="text" class="form-control"  name="total" <?php echo 'value="'.$_GET["total"].'"'; ?> readonly >
                </div>
              </div>
      

              <!-- /.col -->
            </div >
                <div class="form-group"  style="display: flex;flex-direction:row; align-content: center;">
                <input type="submit" name="cancelar" value="Cancelar" class="btn btn-danger" style="margin-right: 30px; margin-left: 100px;"/>
                <input type="submit" name="enviar" value="Guardar Tratamiento" class="btn btn-success"/>

                  <?php /*
                  $abono = new DentalUserAdmin();                
                  $abono -> getIdAbono($_GET["idcliente"], $_GET["totalcita"], $_GET["idcita"]);
                  */ ?>
                                  
                  
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

 if(isset($_POST['recalcular'])){
        $ingreso = new DentalAdmin();
$ingreso -> datosValoracioncita2(); 
    }
    else if(isset($_POST['cancelar'])){
      echo '<script> window.location="Citasrealizadas";</script>';
    }
    else{

$ingreso = new DentalAdmin();
//$ingreso -> datosValoracioncita();
$ingreso -> ingresoTotal(); 

}