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
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">LISTA DE CITAS REALIZADAS</h3>
            </div>


          <div class="card">
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ESTADO DE CUENTA</th>
                  <th>MONTO</th>
                  <th>TRATAMIENTO</th>                
          
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalAdmin();
                $listalibrosvirtual -> listadoedocuentaUser();
               // $listalibrosvirtual -> listaCitaUser();
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
