        <?php

if(!$_SESSION["nick"]){

  echo '<script> window.location="login";</script>';

  exit();

  }
  else{
  
  }
?> 
 <section class="content">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              HISTORIAL DEL CLIENTE <strong><?php echo $_GET["nombre"]; ?></strong>
            </h3>
          </div>
          <div class="card-body">
            
            <div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">CITAS</a>
                  <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">ESTADO DE CUENTA</a>
                  <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">ABONOS</a>
               <!--   <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">ABONOS</a> -->
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
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
                  <th>FECHA</th>
                  <th>FECHA DE CITA PROGRAMA</th>
                  <th>TOTAL A PAGADO</th> 
                  <th>OBSERVACIONES</th>
                  <th>VER</th>                
          
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalAdmin();
               // $listalibrosvirtual -> listadoDoc();
                $listalibrosvirtual -> listaCitaUseradmin();
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
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
            <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">LISTA DE TRATAMIENTO REALIZADAS</h3>
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
                $listalibrosvirtual -> listadoedocuentaUseradmin();
               // $listalibrosvirtual -> listaCitaUser();
                ?>
                </tbody>
               
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

  

                  </div>
                  <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                    
                    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">LISTA DE ABONOS REALIZADAS</h3>
            </div>


          <div class="card">
          
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID ABONO</th>
                  <th>MONTO APORTADO</th>
                  <th>FECHA</th>                
          
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalAdmin();
               // $listalibrosvirtual -> listadoedocuentaUser();
                $listalibrosvirtual -> listaAbonosUseradmin();
                ?>
                </tbody>
                
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
                  </div>
               <!--   <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                  </div> -->
                </div>
              </div>
            </div>

          </div>
          <!-- /.card -->
        </div>
        </<section>
          
      