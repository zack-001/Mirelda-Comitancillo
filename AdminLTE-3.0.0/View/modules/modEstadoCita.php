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
       <h3 class="card-title">ACTUALIZACIÓN DE ESTADO DE CITA</h3>    
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      <div class="row"><div class="col-md-6">
      <form method="post">
        <input type="hidden" class="form-control"  name="idcliente"  <?php echo 'value="'.$_GET["idcliente"].'"'; ?>  >
        <input type="hidden" class="form-control"  name="id"  <?php echo 'value="'.$_GET["idcita"].'"'; ?>  >
        <input type="hidden" class="form-control"  name="nombrecliente"  <?php echo 'value="'.$_GET["nombrecliente"].'"'; ?>  >
      <div class="form-group">
        <label>ESTADO</label>  
        <select class="form-control select2" name="estado"  style="width: 100%;">
          <option selected="selected">Selecciona una opción</option>
          <option value="ACTIVO">ACTIVO</option> 
          <option value="NO-ASISTIO">NO-ASISTIO</option> 
          <option value="FINALIZADO">FINALIZADO</option> 

        </select>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <input type="submit" name="enviar" value="Enviar datos" class="btn btn-success"/>
        </div>
      </div>

      </form>
      </div></div>             
      </div>

    <!-- /.card-->
    </div>
   <!--/. container-->
   </div>
</section>  
<?php
$ingreso = new DentalUserAdmin();
$ingreso -> datosUpdateEstadoCita(); 
?>
