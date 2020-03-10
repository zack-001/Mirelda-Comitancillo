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
      <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              TRATAMIENTOS DEL CLIENTE <strong><?php echo $_GET["nombre"]; ?></strong>
            </h3>
          </div>
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <input type="hidden" class="form-control"  name="idcita"  <?php echo 'value="'.$_GET["idcita"].'"'; ?>  >
            <input type="hidden" class="form-control"  name="nombre"  <?php echo 'value="'.$_GET["nombre"].'"'; ?>  >
          <div class="card-body" id='mytable'>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>                
                  <th>TRATAMIENTO</th>                
                  <th>Organos Dentarios</th>
                  <th>TOTAL A PAGAR</th>
                  <th>FECHA</th>
                  <th>RECETA</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalAdmin();
                $listalibrosvirtual -> listadoTratamientosUser();
                ?>
                </tbody>
              
			   </table>
               <?php if($_GET["idValoracion"]){?>
              <hr>
                <div class="card-header">
                    <h3 class="card-title"> RECETARIO TRATAMIENTO <strong><?php echo $_GET["idValoracion"]; ?></strong>
            </h3>
          </div>
                <table class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>                
                  <th>PRODUCTO</th>                
                  <th>DESCRIPCION</th>
                  <th>NOTA</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalAdmin();
                $listalibrosvirtual -> listadoRecetasTratamientos($_GET[idValoracion]);
                ?>
                </tbody>
				</table> 
                <?php }?>
            </div>

  <script>
  function hola(){
      alert("HOLA");
  }
  function recetas(){
	 const newTr = `
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID Cita</th>                
                  <th>PRODUCTO</th>                
                  <th>DESCRIPCION</th>
                  <th>NOTA</th>
                </tr>
                </thead>
                <tbody>
              <?php
                $listalibrosvirtual = new DentalAdmin();
                $listalibrosvirtual -> listadoRecetasTratamientos($_GET[idValoracion]);
                ?>
                </tbody>
				</table>
               `;
  $(mytable).append(newTr);
}
</script>