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
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                
                  <th>TRATAMIENTO</th>
                  <th>COSTO</th>                
                  <th>ABONAR</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalUserAdmin();
               // $listalibrosvirtual -> listadoDoc();
                $listalibrosvirtual -> consultaClienteabono();
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
