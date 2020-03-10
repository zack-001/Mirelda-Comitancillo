  <?php

if(!$_SESSION["nick"]){

  echo '<script> window.location="login";</script>';

  exit();

  }
  else{
  
  }
?> 

 <?php

$ingreso = new DentalUserAdmin();
$ingreso -> eliminatipoTramientos(); 
