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

         

          
          <h3 class="card-title">CONSULTA DE INGRESO DE CITAS POR FECHA</h3>         
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-112">
                <div class="form-group">
                
                 <div class="wrapper">
  <!-- Main content -->
 
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i>CLINICA DENTAL
          <small class="float-right">FECHA: <?php echo $_GET["fecha"]; ?> </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <p>      
      &nbsp;
    </p>
    <p>      
      &nbsp;
    </p>


    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>ID CITA</th>
            <th>CLIENTE</th>
            <th>PAGO REALIZADO</th>
            
          </tr>
          </thead>
          <tbody>
         
          <?php
                $listalibrosvirtual = new DentalUserAdmin();
                $listalibrosvirtual -> listaCitahoyIngreso();
              // $listalibrosvirtual -> listaCitahoy();
                ?>
     
         
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">PAGOS EN EFECTIVO:</p>
        

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
         Uste acaba de realizar una consulta a partir de ingreso por concepto de cita clinicas. 
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead"></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%"><strong>Total:</strong> </th>
              <td><strong>$<?php echo $_GET["total"]; ?>.00</strong></td>
            </tr>
            <tr>
              <th></th>
              <td></td>
            </tr>
           
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  <!-- /.content -->
</div>


            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
        <!-- /.card -->

    </div>
  </section>
   <?php

$ingreso = new DentalAdmin();
//$ingreso -> datosValoracioncita();
$ingreso -> consultaIngresoxfecha(); 

