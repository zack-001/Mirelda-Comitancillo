 <?php

class DentalUserAdmin{

	#LLAMADA A LA PLANTILLA
	#----------------------------------------------

  public function registroDoc(){
    if(isset($_POST["registro"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("id"=>$_POST["id"],
                                   "nombre"=>$_POST["nombre"],
                                   "especialidad"=>$_POST["especialidad"]);     

                $buscaId = DatosAdmin::buscaIdmedico($datos);
               if ($buscaId["idmedico"] == ""){

                $respuesta = DatosAdmin::registroDocUser($datos); 
                if($respuesta == "success"){
              echo '<script> window.location="OkDoc";</script>';
               }
              else{
             echo '<script> window.location="ErrorDoc";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController); 
                
               

               } 
             
               else{
                   echo '<script> window.location="duplicadoDoc";</script>';                         
             }
        }
  }

  public function listadoDoc(){ 
    $respuesta = DatosAdmin::consultaDocs("medico");
    foreach($respuesta as $row => $item){
    echo'<tr>
            
            <td>'.$item["idmedico"].'</td>
            <td>'.$item["nombre"].'</td>
            <td>'.$item["especialidad"].'</td>
            <td><center><a target="_black" href="index.php?action=actualizaDoc&id='.$item["idmedico"].'&nombre='.$item["nombre"].'&especialidad='.$item["especialidad"].'"><i class="fas fa-sync-alt fa-2x"></i></div></a></center></td>
            <td><center><a  href="index.php?action=eliminaDoc&id='.$item["idmedico"].'"><i class="fas fa-user-times fa-2x"></i></div></a></center></td>
           
          
           
                      
        </tr>';

    }

  }

  public function listaCitahoy(){ 
    date_default_timezone_set('America/Mexico_City');
    $hoy= date("Y-m-d");
    $datos = array("hoy"=>$hoy);
    $respuesta = DatosAdmin::consultaCitahoy($datos);
    //var_dump($respuesta);
    
    foreach($respuesta as $row => $item){
      $op= ($item["estado"]=='ACTIVO' || $item["estado"]=='PENDIENTE') ? $item['prox_cita'].' <a href="index.php?action=modFechaCita&idcita='.$item["idcita"].'&idcliente='.$item["idCliente"].'&nombrecliente='.$item["nombrecliente"].'"><i class="far fa-edit"></i></a>':"$item[prox_cita]";
      $op2=($item['estado']!='FINALIZADO') ? '<center><a  href="index.php?action=agregaCita&idcita='.$item["idcita"].'&idcliente='.$item["idCliente"].'&nombrecliente='.$item["nombrecliente"].'&total='.$item["total_pagar_cita"].'"><i class="fas fa-file-medical-alt fa-2x"></i></div></a></center>':" ";
      echo'<tr>
            
            <td>'.$item["nombrecliente"].'</td>
            <td>'.$op.'</td>
            <td>'.$op2.'</td>
            <td><center>'. $item['estado'].'<a href="index.php?action=modEstadoCita&idcita='.$item["idcita"].'&idcliente='.$item["idCliente"].'&nombrecliente='.$item["nombrecliente"].'"><i class="far fa-edit"></i></a></center></td>
            <td><center><a  href="index.php?action=movimientosCliente&idCliente='.$item["idCliente"].'&nombre='.$item["nombrecliente"].'"><i class="fas fa-money-check-alt fa-2x"></i></div></a></center></td>  
            <td><center><a  href="index.php?action=eliminaDoc&idcita='.$item["idcita"].'"><i class="fas fa-trash-alt fa-2x"></i></div></a></center></td>              
        </tr>';
//<a href="#"><i class="fas fa-tasks fa-2x"></i></a>
//<td>'.$item["prox_cita"].$item["estado"]=='ACTIVO' ?'<a href="#" ><i class="far fa-edit"></i></a>'. : ' ' </td>
         
    }

  }

  public function listaCitahoyIngreso(){ 

     if(isset($_GET["fecha"])){
           $datos = array("fecha"=>$_GET["fecha"]);
           $respuesta = DatosAdmin::consultaIngresoCita($datos);
 foreach($respuesta as $row => $item){
    echo'<tr>
            
            <td>'.$item["idcita"].'</td>
            <td>'.$item["nombrecliente"].'</td>
            <td>'.$item["total_pagar_cita"].'</td>      
         </tr>';


     }   
    }

  }

  public function actualizacionDoc(){
    if(isset($_POST["update"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("id"=>$_POST["id"],
                                   "nombre"=>$_POST["nombre"],
                                   "especialidad"=>$_POST["especialidad"]);             
                $respuesta = DatosAdmin::actualizaDocUser($datos); 
                if($respuesta == "success"){
              echo '<script> window.location="OkupdateDoc";</script>';
               }
              else{
             echo '<script> window.location="ErrorupdateDoc";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }

  public function eliminaDoc(){
    if(isset($_GET["id"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("id"=>$_GET["id"]);             
                $respuesta = DatosAdmin::eliminaDocUser($datos); 
                if($respuesta == "success"){
              echo '<script> window.location="deleteokDoc";</script>';
               }
              else{
             echo '<script> window.location="deleteerrorDoc";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }

  public function listaDocUser(){
        $respuesta = DatosAdmin::listadoMedicos("medico");   
    foreach($respuesta as $row => $item){
    echo'<option value="'.$item["idmedico"].'">'.$item["nombre"].'</option>';     
    }
  }

  public function registrotratamientosDoc(){
    if(isset($_POST["registro"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("tratamiento"=>$_POST["tratamiento"],
                                   "medico"=>$_POST["medico"],
                                   "costo"=>$_POST["costo"]);     

              

                $respuesta = DatosAdmin::guardatratamientomedico($datos); 
                if($respuesta == "success"){
              echo '<script> window.location="Oktipotratamiento";</script>';
               }
              else{
             echo '<script> window.location="Errortipotratamiento";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController); 
                
               

               } 
        
  }

  public function listadoTratamientos(){ 
    $respuesta = DatosAdmin::consultalistadoTratamientos("medico");
    foreach($respuesta as $row => $item){
    echo'<tr>
            
            <td>'.$item["idTipoTratamiento"].'</td>
            <td>'.$item["descripcion"].'</td>
            <td>'.$item["costo"].'</td>
            <td>'.$item["nombre"].'</td>
            <td>'.$item["especialidad"].'</td>
            <td><center><a  href="index.php?action=actualizatipoTrat&idTipoTratamiento='.$item["idTipoTratamiento"].'&descripcion='.$item["descripcion"].'&costo='.$item["costo"].'&idmedico='.$item["idmedico"].'&nombre='.$item["nombre"].'"><i class="fas fa-sync-alt fa-2x"></i></div></a></center></td>
            <td><center><a  href="index.php?action=eliminatipoTrat&idTipoTratamiento='.$item["idTipoTratamiento"].'"><i class="fas fa-user-times fa-2x"></i></div></a></center></td>
           
          
           
                      
        </tr>';

    }

  }

  public function actualizaciontipoTraminetos(){
    if(isset($_POST["update"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("idTipoTratamiento"=>$_POST["idTipoTratamiento"],
                                   "descripcion"=>$_POST["descripcion"],
                                   "costo"=>$_POST["costo"],
                                   "idmedico"=>$_POST["idmedico"]);        

                  //  var_dump($datos);

               $respuesta = DatosAdmin::actualizacionTraminetos($datos); 
                if($respuesta == "success"){
              echo '<script> window.location="updateTratamiento";</script>';
               }
              else{
             echo '<script> window.location="errorTratamiento";</script>';
                } 
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  } 


  public function eliminatipoTramientos(){
    if(isset($_POST["programar"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("id"=>$_POST["id"],
                                   "fecha"=>$_POST["fecha"],
                                   "fecha_prox"=>$_POST["fecha_prox"]);             
                $respuesta = DatosAdmin::citasaprogramar($datos); 
                if($respuesta == "success"){
              echo '<script> window.location="deleteoktipoTramientos";</script>';
               }
              else{
             echo '<script> window.location="deleteerrortipoTramientos";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }

  public function Programacioncitas(){
    if(isset($_POST["registro"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("tratamiento"=>$_POST["tratamiento"],
                                   "medico"=>$_POST["medico"],
                                   "costo"=>$_POST["costo"]);     

              

                $respuesta = DatosAdmin::guardatratamientomedico($datos); 
                if($respuesta == "success"){
              echo '<script> window.location="Oktipotratamiento";</script>';
               }
              else{
             echo '<script> window.location="Errortipotratamiento";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController); 
                
               

               } 
        
  }

  public function listaTratamientos(){
        $respuesta = DatosAdmin::listadoTratamientoscitas("tipotratamiento");   
    foreach($respuesta as $row => $item){
    echo'<option value="'.$item["idTipoTratamiento"].'">'.$item["descripcion"].'</option>';     
    }
  }
  
  public function consultaClienteabono(){
    if(isset($_GET["idCliente"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("idCliente"=>$_GET["idCliente"]);     

                $respuesta = DatosAdmin::consultaClientevaloracion($datos); 

           foreach($respuesta as $row => $item){
    echo'<tr>
            
            <td>'.$item["tratamiento"].'</td>
            <td>'.$item["total_adecuado"].'</td>
           <td><center><a  href="index.php?action=mostraredoCuenta&idEdoCuenta='.$item["idEdoCuenta"].'&total_adecuado='.$item["total_adecuado"].'&tratamiento='.$item["tratamiento"].'&idCliente='.$item["cliente_idCliente"].'&nombre='.$item["nombre"].'"><i class="fas fa-hand-holding-usd fa-2x"></i></div></a></center></td>
                      
        </tr>';

    }
           
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }
  public function consultaMov(){
    if(isset($_GET["idCliente"])){
                    //$parentesco = "Familiar";
                    //date_default_timezone_set('America/Mexico_City');
                   // $hoy= date("d-m-Y H:i:s");
                    $datos = array("idCliente"=>$_GET["idCliente"]);     

                $respuesta = DatosAdmin::consultaValoracion($datos); 
            
           foreach($respuesta as $row => $item){
             if($item["tipo"]!='CITA'){
              $result= DatosAdmin::getTratamiento($item["tipo"]);
              $result= $result['descripcion'];
             }else{
              $result= "CITA";
             }
             $var=DatosAdmin::getCosto($item["tipo"],$item["id"]);
             
             /*foreach ($var as $key => $value) {
              $sum=
             }*/
             $adeudado=$item["total"]-($var[0]);
            
    echo'<tr>
            <td>'.$result.'</td>            
            <td>'.$item["total"].'</td>
            <td>'.$adeudado.'</td>
            <td>'.$item["fecha"].'</td>
           <td><center><a  href="index.php?action=mostraredoCuenta&idCliente='.$_GET["idCliente"].'&total_adecuado='.$adeudado.'&tratamiento='.$result.'&nombre='.$_GET["nombre"].'&id='.$item["id"].'"><i class="fas fa-hand-holding-usd fa-2x"></i></div></a></center></td>                      
        </tr>';
    }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }
  public function getDeuda($idCliente){
    $respuesta = DatosAdmin::getMov($idCliente); 
    $result = $respuesta[0][0]+$respuesta[1][0]-($respuesta[2][0]);
    echo $result  ;
  }
  public function getIdAbono($idCliente, $idcita, $cita){

    $datos = array("idCliente"=>$idCliente,
    "idcita"=>$idcita);     
    $respuesta = DatosAdmin::consultaClienteTA($datos); 

    foreach($respuesta as $row => $item){
    echo' <a  href="index.php?action=mostraredoCuenta&idEdoCuenta='.$item["idEdoCuenta"].'&total_adecuado='.$item["total_adecuado"].'&tratamiento='.$item["tratamiento"].'&idCliente='.$item["cliente_idCliente"].'&nombre='.$item["nombre"].'&estado=FINALIZADO'.'&cita='.$cita.'" class="btn btn-warning">Terminar cita</a>';
    }
  }

  public function abonarEdocuenta(){
    if(isset($_POST["abonar"])){
      if($_POST["abono"]<=$_GET[total_adecuado]){
      
      date_default_timezone_set('America/Mexico_City');
      $hoy= date("d-m-Y");
      $edocuenta = DatosAdmin::Cliente_edocuenta($_GET["idCliente"]);
      $respuesta = DatosAdmin::getMov($_POST["idCliente"]); 
      $result = $respuesta[0][0]+$respuesta[1][0]-($respuesta[2][0]);
      $datos = array("idEdoCuenta"=>$edocuenta[0][0],
                     "deudaactual"=>($result-$_POST["abono"]));
      $deuda = DatosAdmin::actualizadeuda($datos);
               $datosabono = array("idCliente"=>$_POST["idCliente"],
                     "abono"=>$_POST["abono"],
                     "fecha"=>$hoy,
                     "idEdoCuenta"=>$edocuenta[0][0],
                     "razon"=>($_GET["tratamiento"]=='CITA' ? 'CITA_'.$_GET['id']:$_GET['id'])
                    );
                //var_dump($datosabono);
               $respuesta = DatosAdmin::abonarCliente($datosabono);
                if($respuesta == "success"){
                  echo '<script>alert("Realizó un abono de manera correcta");</script>';
                    echo '<script>location.href="index.php?action=historial&idCliente='.$_POST["idCliente"].'&nombre='.$_GET["nombre"].'";</script>';
                }
                else{
                     var_dump($_POST["idCliente"]);
                 }
                                           
    }else {
      echo '<script>alert("Maximo de abono excedido");</script>';
    }
  }
  }

  public function listadoedocuenta(){ 
    $respuesta = DatosAdmin::consultaedocuenta();
    foreach($respuesta as $row => $item){
    echo'<tr>
            
            <td>'.$item["nombre"].'</td>
            <td>'.$item["idEdoCuenta"].'</td>
            <td>'.$item["total_adecuado"].'</td>
            <td>'.$item["tratamiento"].'</td>   
                      
        </tr>';

    }
  }

  public function listadoaAbonos(){ 
    $respuesta = DatosAdmin::consultaAbonos();
    foreach($respuesta as $row => $item){
    echo'<tr>
            
            <td>'.$item["nombre"].'</td>
            <td>'.$item["idEdoCuenta"].'</td>
            <td>'.$item["porcubrir"].'</td>
            <td>'.$item["cantidad"].'</td>
            <td>'.$item["fecha"].'</td>
                                  
        </tr>';

    }
  }

  public function datosUpdateEstadoCita(){
    if(isset($_POST["id"])){
      $datos = array("id"=>$_POST["id"],
                     "estado"=>$_POST["estado"]);             
  $respuesta = DatosAdmin::updateEstadoCita($datos);
  if($respuesta == "success"){
echo '<script> window.location="okUpdateCita";</script>';
 }
else{
echo '<script> window.location="ErrorupdateCliente";</script>';
  }
// var_dump($datos);
//  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            

}
  }
  

/*
  public function actulizadatosUsercliente(){
    if(isset($_POST["id"])){
                    $parentesco = "Familiar";
                    date_default_timezone_set('America/Mexico_City');
                    $hoy= date("d-m-Y H:i:s");
                    $datos = array("id"=>$_POST["id"],
                                   "nombre"=>$_POST["nombre"],
                                   "telefono"=>$_POST["telefono"],
                                   "edad"=>$_POST["edad"],
                                   "sexo"=>$_POST["sexo"],
                                   "direccion"=>$_POST["direccion"],
                                   "alergias"=>$_POST["alergias"],
                                    "sangre"=>$_POST["sangre"]);             
                $respuesta = Datos::updateCliente($datos);
                $respuestaUser = Datos::updateUser($datos); 
                if($respuesta == "success"){
              echo '<script> window.location="OkupdateCliente";</script>';
               }
              else{
             echo '<script> window.location="ErrorupdateCliente";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  } */

} //fin clase
