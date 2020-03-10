<?php

if(!$_SESSION["nick"]){

  echo '<script> window.location="login";</script>';

  exit();

  }
  else{
  
  }
?> 


      <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">LISTA DE CUENTAS POR PAGAR DE <strong> <?php echo $_GET["nombre"]; ?></strong></h3>
            </div>


          <div class="card">
          <h5 style="margin:10px;color:red">Total Adeudado: 
          <?php
                $listalibrosvirtual = new DentalUserAdmin();
                $listalibrosvirtual -> getDeuda($_GET["idCliente"]);
                ?>
           </h5>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>RAZON</th>
                  <th>COSTO</th>
                  <th>ADEUDADO</th>
                  <th>FECHA</th>                
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalUserAdmin();
               // $listalibrosvirtual -> listadoDoc();
                $listalibrosvirtual -> consultaMov();
                ?>
                </tbody>
                <tfoot>
              
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
