 <?php
 session_start();
class DentalAdmin{

	#LLAMADA A LA PLANTILLA
	#----------------------------------------------

	public function plantilla(){

		#include() Se utiliza para invocar el archivo que contiene código html.
		include "View/template.php";
	}

	#INTERACCIÓN DEL USUARIO
	#----------------------------------------------
	public function enlacesPaginas(){

		if(isset($_GET["action"])){

		$enlacesController = $_GET["action"];
		}
		else{
		$enlacesController = "index";
		}
		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController); 
		include $respuesta;
	}
    
  public function accesoUser(){
    if(isset($_POST["email"]) && isset($_POST["pass"])){

                    $datos = array("email"=>$_POST["email"],
                                   "pass"=>$_POST["pass"]);             
                $respuesta = Datos::ValidarUser($datos); 
                

              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             if ($respuesta["nick"] == $_POST["email"] AND $respuesta["pass"] == $_POST["pass"] AND $respuesta["tipo"] == "Usuario" ) {       
                    
                   $id = array("id"=>$respuesta["idUsuario"]);
                   $respuestaidCliente = Datos::idCliente($id);

                   $_SESSION["validar"] = true;
                    $_SESSION["nick"] = $respuesta["nick"]; 
                   $_SESSION["idUsuario"] = $respuesta["idUsuario"];
                   $_SESSION["nombre"] = $respuesta["nombre"];
                    
                     $_SESSION["nombrecliente"] = $respuestaidCliente["nombre"];
                    $_SESSION["idUsuarioCliente"] = $respuestaidCliente["idUsuario"];
                    $_SESSION["edad"] = $respuestaidCliente["edad"];
                    $_SESSION["telefono"] = $respuestaidCliente["telefono"];                    
                   $_SESSION["sexo"] = $respuestaidCliente["sexo"];
                   $_SESSION["direccion"] = $respuestaidCliente["direccion"];
                   $_SESSION["alergias"] = $respuestaidCliente["alergias"];
                   $_SESSION["tipoSangre"] = $respuestaidCliente["tipoSangre"];
                                                                            
                   echo '<script> window.location="iniciouser";</script>';                                     
                }

                if ($respuesta["nick"] == $_POST["email"] AND $respuesta["pass"] == $_POST["pass"] AND $respuesta["tipo"] == "Administrador" ) {       
                    
                   $id = array("id"=>$respuesta["idUsuario"]);
                   $respuestaidCliente = Datos::idCliente($id);

                   $_SESSION["validar"] = true;
                    $_SESSION["nick"] = $respuesta["nick"]; 
                   $_SESSION["idUsuario"] = $respuesta["idUsuario"];
                   $_SESSION["nombre"] = $respuesta["nombre"];
                    
                 /*    $_SESSION["nombrecliente"] = $respuestaidCliente["nombre"];
                    $_SESSION["idUsuarioCliente"] = $respuestaidCliente["idUsuario"];
                    $_SESSION["edad"] = $respuestaidCliente["edad"];
                    $_SESSION["telefono"] = $respuestaidCliente["telefono"];                    
                   $_SESSION["sexo"] = $respuestaidCliente["sexo"];
                   $_SESSION["direccion"] = $respuestaidCliente["direccion"];
                   $_SESSION["alergias"] = $respuestaidCliente["alergias"];
                   $_SESSION["tipoSangre"] = $respuestaidCliente["tipoSangre"]; */
                                                                            
                   echo '<script> window.location="inicioAdmin";</script>';                                     
                }   
                     else{
                    
                     echo '<script> window.location="fallo";</script>';
                  //   var_dump($respuesta);

                   }  
        }
  }



  public function actulizaUsercliente(){
    if(isset($_POST["registra"])){

                date_default_timezone_set('America/Mexico_City');
                        $fecha_actual = strtotime(date("Y-m-d",time()));
                        $fecha_entrada = strtotime($_POST["fechaingreso"]);
                         
                             if($fecha_actual > $fecha_entrada){                                 
                            echo '<script> window.location="errorFecha";</script>';
                                   }
                                   else{
                                                        $usuario= "Usuario";
                                        $datos = array("nombre"=>$_POST["nombre"],
                                                       "nick"=>$_POST["nick"],
                                                       "pass"=>$_POST["pass"],
                                                       "tipo"=>$usuario); 
                                    $consultanick = Datos::consultaNickcliente($datos);
                                    if ($consultanick["nick"] == $_POST["nick"] ) {
                                           echo '<script> window.location="Nickduplicado";</script>';                                      
                                    }
                                    else{

                                                        $respuesta = Datos::guardaUser($datos); 
                                               if($respuesta == "success"){
                                                $buscaidUser = Datos::buscaid($datos); 
                                                       $datosCliente = array("nombre"=>$_POST["nombre"],
                                                       "parentesco"=>$_POST["parentesco"],
                                                       "tutor"=>$_POST["tutor"],
                                                       "sexo"=>$_POST["sexo"],
                                                       "direccion"=>$_POST["direccion"],
                                                       "alergias"=>$_POST["alergias"],
                                                       "edad"=>$_POST["edad"],
                                                       "fechaingreso"=>$_POST["fechaingreso"],
                                                       "sangre"=>$_POST["sangre"],
                                                       "telefono"=>$_POST["telefono"],
                                                       "id"=>$buscaidUser["idUsuario"],
                                                       "telfonotutor"=>$_POST["telfonotutor"]);
                                                      $respuestaCliente = Datos::guardaCliente($datosCliente);    
                                                         if($respuestaCliente == "success"){
                                                            echo '<script> window.location="OkCliente";</script>';
                                                         }
                                                         else{
                                                          echo '<script> window.location="ErrorCliente";</script>';
                                                         }
                                               }
                                               else{
                                                    echo '<script> window.location="ErrorUser";</script>';
                                               }                                  
                                       }
                                         
                                   }
                   //  $parentesco = "Familiar";
                  //  date_default_timezone_set('America/Mexico_City');
                


                


    /*            


*/

           //   
              
         /*     else{
             
                } */
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }

  public function refreshCliente(){
    if(isset($_POST["actualiza"])){
                   // $parentesco = "Familiar";
                 //   date_default_timezone_set('America/Mexico_City');
                  //  $hoy= date("d-m-Y H:i:s");
                    $datos = array("idUsuario"=>$_POST["idUsuario"],
                                   "idCliente"=>$_POST["idCliente"],
                                   "nombre"=>$_POST["nombre"],
                                   "edad"=>$_POST["edad"],
                                   "sexo"=>$_POST["sexo"],
                                   "direccion"=>$_POST["direccion"],
                                   "alergias"=>$_POST["alergias"],
                                   "telefono"=>$_POST["telefono"],
                                   "pass"=>$_POST["pass"],
                                    "sangre"=>$_POST["sangre"]);             
                $respuesta = Datos::refreshupdateUser($datos);
              //  $respuestaUser = Datos::updateUser($datos); 
                if($respuesta == "success"){
             
                     $datosCliente = array("idUsuario"=>$_POST["idUsuario"],
                                   "idCliente"=>$_POST["idCliente"],
                                   "nombre"=>$_POST["nombre"],
                                   "edad"=>$_POST["edad"],
                                   "sexo"=>$_POST["sexo"],
                                   "direccion"=>$_POST["direccion"],
                                   "alergias"=>$_POST["alergias"],
                                   "telefono"=>$_POST["telefono"],
                                   "pass"=>$_POST["pass"],
                                   "sangre"=>$_POST["sangre"]);
                 $respuestaCliente = Datos::refreshupdateCliente($datosCliente);
                       if($respuesta == "success"){
                         echo '<script> window.location="Okrefresh";</script>';
                       }
                       else{
                         echo '<script> window.location="errorRefresh";</script>';
                       }

               }
              else{
             echo '<script> window.location="ErrorrefreshUser";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }



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
  }

  public function eliminaTodo(){
    if(isset($_GET["idUsuario"]) && isset($_GET["idCliente"]) ){
                $datos = array("idCliente"=>$_GET["idCliente"]);  
                $respuesta = Datos::deleteCliente($datos);
                if($respuesta == "success"){
                  $datosUser = array("idUsuario"=>$_GET["idUsuario"]);
                  $respuestaUser = Datos::deleteUser($datosUser);
                  if($respuestaUser == "success"){
                    echo '<script> window.location="deleteOKtodo";</script>';
                  }
                  else{
                    echo '<script> window.location="ErrordeleteUser";</script>';
                  }
               }
              else{
                    echo '<script> window.location="ErrordeleteCliente";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }

  public function listadoClientes(){ 
    $respuesta = Datos::consultalistadolistadoClientes("cliente");
    foreach($respuesta as $row => $item){
       $div = explode("-", $item["edad"]);
      $edad = date('Y')-$div[0];
    echo'<tr>
            
            <td>'.$item["nombre"].'</td>
            
            <td>'.$item["nick"].'</td>
             <td><center><a  href="index.php?action=viewClientes&idCliente='.$item["idCliente"].'&nombre='.$item["nombre"].'&edad='.$edad.'&sexo='.$item["sexo"].'&direccion='.$item["direccion"].'&telefono='.$item["telefono"].'&alergias='.$item["alergias"].'&tipoSangre='.$item["tipoSangre"].'&pass='.$item["pass"].'"><i class="far fa-eye fa-2x"></i></div></a></center></td>

            <td><center><a  href="index.php?action=citas&idCliente='.$item["idCliente"].'&idUsuario='.$item["idUsuario"].'&nombre='.$item["nombre"].'"><i class="far fa-calendar-check fa-2x"></i></div></a></center></td>

            <td><center><a  href="index.php?action=historial&idCliente='.$item["idCliente"].'&nombre='.$item["nombre"].'"><i class="fas fa-id-card-alt fa-2x"></i></div></a></center></td>

            <td><center><a  href="index.php?action=movimientosCliente&idCliente='.$item["idCliente"].'&nombre='.$item["nombre"].'"><i class="fas fa-money-check-alt fa-2x"></i></div></a></center></td>
          
            <td><center><a  href="index.php?action=modificauser&idCliente='.$item["idCliente"].'&nombre='.$item["nombre"].'&edad='.$item["edad"].'&sexo='.$item["sexo"].'&telefono='.$item["telefono"].'&alergias='.$item["alergias"].'&tipoSangre='.$item["tipoSangre"].'&idUsuario='.$item["idUsuario"].'&nick='.$item["nick"].'&pass='.$item["pass"].'&direccion='.$item["direccion"].'"><i class="fas fa-sync-alt fa-2x"></i></div></a></center></td>

            <td><center><a  href="index.php?action=deleteDatos&idCliente='.$item["idCliente"].'&idUsuario='.$item["idUsuario"].'"><i class="fas fa-user-times fa-2x"></i></div></a></center></td>                  
        </tr>';

        /* 
        <td>'.$item["edad"].'</td>
            <td>'.$item["sexo"].'</td>
            <td>'.$item["direccion"].'</td>
            <td>'.$item["telefono"].'</td>
            <td>'.$item["tipoSangre"].'</td>
            <td>'.$item["alergias"].'</td>*/

    }

  }
  public function agregareceta(){
	  if (isset($_POST["info"])){
    $data = explode("+", $_POST["info"]);

    foreach($data as $value){
		if($value!=''){
		$elements = explode("-", $value, 3);

		$result= Datos::AddReceta($_GET['idValoracion'], $elements); 

		}
	}
	echo '<script> window.location="CuentaOk";</script>';
	}
  }
  

  
  public function ProgramacionCitas(){
    if(isset($_POST["idCliente"]) ){            
                        date_default_timezone_set('America/Mexico_City');
                        $fecha_actual = strtotime(date("Y-m-d",time()));
                        $fecha_cita = strtotime($_POST["fecha_cita"]);
                        $fecha_prox_cita = strtotime($_POST["fecha_prox_cita"]);
                         
                             if($fecha_actual > $fecha_cita){                                 
                            echo '<script> window.location="index.php?action=errorFechaCita&idCliente='.$_GET["idCliente"].'&nombre='.$_GET["nombre"].'";</script>';
                                   }
                             elseif($fecha_prox_cita != null && ($fecha_actual > $fecha_prox_cita)){
                            echo '<script> window.location="index.php?action=errorFechaproximoCita&idCliente='.$_GET["idCliente"].'&nombre='.$_GET["nombre"].'";</script>';  
                             }
                             elseif($fecha_actual == $fecha_prox_cita){
                            echo '<script> window.location="index.php?action=errorFechaproximoigualaCita&idCliente='.$_GET["idCliente"].'&nombre='.$_GET["nombre"].'";</script>';  
                             }
                                   else{
                                    $datos = array("idCliente"=>$_POST["idCliente"],
                                    "fecha_cita"=>$_POST["fecha_cita"],
                                    "costo_cita"=>$_POST["costo_cita"],
                                    "programacion"=>$_POST["programacion"],
                                    "observaciones"=>$_POST["observaciones"],
                                    "estado"=>$_POST["estado"],
                                    "fecha_prox_cita"=>$_POST["fecha_prox_cita"]);  
                                    $respuesta = Datos::altaProgramacionCitas($datos);   
                                    
                                    $datosCuentatotal = array("idcliente"=>$_POST["idCliente"],
                                    "descripcion"=>'CITA',
                                    "total"=>$_POST["costo_cita"]);
                                    
                                    $edocuenta= Datos::consultaedocuentasUser($datos);
                                    if($edocuenta==null){
                                      Datos::addEdoCuenta($datosCuentatotal);
                                    }else{
                                      foreach($edocuenta as $row => $item){
                                        $total= $item["total_adecuado"]+$_POST["costo_cita"];
                                        }
                                        $datosCuentatotal = array("idcliente"=>$_POST[idCliente],
                                        "descripcion"=>'CITA',
                                        "total"=>$total);
                                      $respuesta= Datos::actualizaCuenta($datosCuentatotal); 
                                    }
                                           
                                   if($respuesta == "success"){
                                    echo '<script> window.location="Okcitaprogramada";</script>';
                                   }                               
                                   else{
                                    echo '<script> window.location="index.php?action=Errorcitaprogramada&idCliente='.$_GET["idCliente"].'";</script>';
                                  }
                              // var_dump($datos);
                              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                         */
                                   }

                            }
  }
   public function datosValoracioncita2(){
    if (isset($_POST["idcita"])) {
       $datos = array("idtratamiento"=>$_POST["idtratamiento"]);
       $respuesta = DatosAdmin::consultaCosto($datos);
       $total = $_POST["cantidad"] * $_POST["costo"]-$_POST[descuento];

      echo '<script> window.location="index.php?action=totalValoracion&idcita='.$_POST["idcita"].'&idtratamiento='.$_POST["idtratamiento"].'&cantidad='.$_POST["cantidad"].'&costo='.$_POST["costo"].'&descripcion='.$respuesta["descripcion"].'&totalcita='.$_POST["total"].'&nombre='.$respuesta["nombre"].'&total='.$total.'&idcliente='.$_POST["idcliente"].'&nombrecliente='.$_POST["nombrecliente"].'&descuento='.$_POST['descuento'].'&organosDentarios='.$_POST['organosDentarios'].'";</script>'; 
      # code...
    }
  }
  public function datosUpdateFechaCita(){
    if(isset($_POST["id"])){
      $datos = array("id"=>$_POST["id"],
                     "prox_cita"=>$_POST["prox_cita"]);             
  $respuesta = Datos::updateFechaCita($datos);
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


   public function datosValoracioncita(){
    if (isset($_POST["idcita"])) {
       $datos = array("idtratamiento"=>$_POST["idtratamiento"]);
       $respuesta = DatosAdmin::consultaCosto($datos);
       $total = $_POST["cantidad"] * $respuesta["costo"]-$_POST[descuento];

      echo '<script> window.location="index.php?action=totalValoracion&idcita='.$_POST["idcita"].'&idtratamiento='.$_POST["idtratamiento"].'&cantidad='.$_POST["cantidad"].'&costo='.$respuesta["costo"].'&descripcion='.$respuesta["descripcion"].'&nombre='.$respuesta["nombre"].'&total='.$total.'&idcliente='.$_POST["idcliente"].'&nombrecliente='.$_POST["nombrecliente"].'&descuento='.$_POST['descuento'].'";</script>'; 
      # code...
    }
  }

  public function ingresoTotal(){
    if(isset($_POST["idcita"]) && isset($_POST["idcliente"]) ){
                    date_default_timezone_set('America/Mexico_City');
                    $fecha= date("d-m-Y");
                    
                $datos = array("idcita"=>$_POST["idcita"],
                               "idtratamiento"=>$_POST["idtratamiento"],
                                "cantidad"=>$_POST["cantidad"],
                                "total"=>$_POST["total"],
                                "fecha"=>$fecha,
                                "organosDentarios"=>$_POST["organosDentarios"]); 
                $datos1 = array("id"=>$_POST["idcita"],
                                "estado"=>$_POST["estado"],); 

                $datosCuenta = array("idCliente"=>$_POST["idcliente"]);
                  //$respuestaCuenta = Datos::buscacuenta($datosCuenta);
                  //$totalCuenta = $respuestaCuenta["total_adecuado"] + $_POST["total"];
                $respuesta = Datos::agregaValoracion($datos);
                $res = Datos::updateEstadoCita($datos1);
                if($respuesta == "success"){  
                  $edocuenta= Datos::consultaedocuentasUser($datosCuenta);
                  foreach($edocuenta as $row => $item){
                    $total= $item["total_adecuado"]+$_POST["total"];
                    }
                  
                    $datosCuentatotal = array("idcliente"=>$_POST["idcliente"],
                    "descripcion"=>$_POST["descripcion"],
                    "total"=>$total);
        
                  $respuestaCuentatotal = Datos::actualizaCuenta($datosCuentatotal);
                  if($respuestaCuentatotal == "success"){
                    $idvaloracion= Datos::GetLastID($_GET['idcita'], $_GET['idtratamiento']);
                    echo '<script> window.location="index.php?action=AgregarRecetas&idValoracion='.$idvaloracion[0].'&descripcion='.$respuesta["descripcion"].'&nombre='.$respuesta["nombre"].'&nombrecliente='.$_POST["nombrecliente"].'";</script>'; 

                  }
                  else{
                    echo '<script> window.location="ErrorCuenta";</script>';
                  }
               }
              else{
                    echo '<script> window.location="ErrorValoracion";</script>';
                }
              // var_dump($datos);
              //  $respuestaDocente = Datos::imprimirlistaModelDocente($datosController);                            
             
        }
  }

  public function consultaIngresoxfecha(){
    if (isset($_POST["fecha"])) {
       $datos = array("fecha"=>$_POST["fecha"]);
       $respuesta = Datos::consultaIngresos($datos);

       $respuesta["total"];

      echo '<script> window.location="index.php?action=IngresoFecha&total='.$respuesta["total"].'&fecha='.$_POST["fecha"].'";</script>'; 
      # code...
    }
  }


  public function listaCitaUser(){ 
    if (isset($_GET["iduser"])) {
      $datos = array("iduser"=>$_GET["iduser"]);
      $buscacliente = Datos::consultaCliente($datos);
      $datosUser = array("idCliente"=>$buscacliente["idCliente"]);
      $buscaCitas = Datos::consultaCitas($datosUser);
      foreach($buscaCitas as $row => $item){
    echo'<tr>          
            <td>'.$item["fecha"].'</td>
            <td>'.$item["prox_cita"].'</td>
            <td>'.$item["total_pagar"].'</td>           
        </tr>';

    }


    } 

  }

  public function listadoedocuentaUser(){ 
    if (isset($_GET["iduser"])) {
      $datos = array("iduser"=>$_GET["iduser"]);
      $buscacliente = Datos::consultaCliente($datos);
      $datosUser = array("idCliente"=>$buscacliente["idCliente"]);
      $buscaedocuenta = Datos::consultaedocuentasUser($datosUser);
      foreach($buscaedocuenta as $row => $item){
    echo'<tr>          
            <td>'.$item["idEdoCuenta"].'</td>
            <td>'.$item["total_adecuado"].'</td>
            <td>'.$item["tratamiento"].'</td>           
        </tr>';

      }
    } 

  }

  public function listaAbonosUser(){ 
    if (isset($_GET["iduser"])) {
      $datos = array("iduser"=>$_GET["iduser"]);
      $buscacliente = Datos::consultaCliente($datos);
      $datosUser = array("idCliente"=>$buscacliente["idCliente"]);
      $buscaAbono = Datos::consultaAbonoUser($datosUser);
      foreach($buscaAbono as $row => $item){
    echo'<tr>          
            <td>'.$item["idAbono"].'</td>
            <td>'.$item["cantidad"].'</td>
            <td>'.$item["fecha"].'</td>           
        </tr>';

      }
    } 

  }

  public function listaCitaUseradmin(){ 
    if (isset($_GET["idCliente"])) {
   /*   $datos = array("iduser"=>$_GET["idCliente"]);
      $buscacliente = Datos::consultaCliente($datos); */
      $datosUser = array("idCliente"=>$_GET["idCliente"]);
      $buscaCitas = Datos::consultaCitas($datosUser);
      foreach($buscaCitas as $row => $item){
    echo'<tr>          
            <td>'.$item["fecha"].'</td>
            <td>'.$item["prox_cita"].'</td>
            <td>'.$item["total_pagar"].'</td> 
            <td>'.$item["observaciones"].'</td>  
            <td><center><a  href="index.php?action=listaTratamientosUser&idcita='.$item["idcita"].'&nombre='.$_GET["nombre"].'"><i class="fas fa-id-card-alt fa-2x"></i></div></a></center></td>         
        </tr>';

    }


    } 
  }

  public function listadoTratamientosUser(){ 
    $respuesta = Datos::consultalistadoTratamientoUser($_GET[idcita]);
    foreach($respuesta as $row => $item){
    echo'<tr>
            <td>'.$item["idValoracion"].'</td>
            <td>'.$item["descripcion"].'</td>           
            <td>'.$item["organosDentarios"].'</td>
			      <td>'.$item["total"].'</td>
            <td>'.$item["fecha"].'</td> 
            <td><center><a  href="index.php?action=listaTratamientosUser&idcita='.$_GET["idcita"].'&nombre='.$_GET["nombre"].'&idValoracion='.$item["idValoracion"].'"><i class="fas fa-id-card-alt fa-2x"></i></div></a></center></td>             
        </tr>';
    }

  }

  public function listadoRecetasTratamientos($idValoracion){ 
    $respuesta = Datos::consultalistadoRecetasTratamiento($idValoracion);
	foreach($respuesta as $row => $item){

    echo'<tr>
            <td>'.$item["idReceta"].'</td>
            <td>'.$item["medicamento"].'</td>
            <td>'.$item["descripcion"].'</td>           
            <td>'.$item["notas"].'</td>
        </tr>';

  }
  }

  public function listadoedocuentaUseradmin(){ 
    if (isset($_GET["idCliente"])) {
  /*    $datos = array("iduser"=>$_GET["iduser"]);
      $buscacliente = Datos::consultaCliente($datos); */
      $datosUser = array("idCliente"=>$_GET["idCliente"]);
      $buscaedocuenta = Datos::consultaedocuentasUser($datosUser);
      foreach($buscaedocuenta as $row => $item){
    echo'<tr>          
            <td>'.$item["idEdoCuenta"].'</td>
            <td>'.$item["total_adecuado"].'</td>
            <td>'.$item["tratamiento"].'</td>           
        </tr>';

      }
    } 

  }

  public function listaAbonosUseradmin(){ 
    if (isset($_GET["idCliente"])) {
    /*  $datos = array("iduser"=>$_GET["iduser"]);
      $buscacliente = Datos::consultaCliente($datos); */
      $datosUser = array("idCliente"=>$_GET["idCliente"]);
      $buscaAbono = Datos::consultaAbonoUser($datosUser);
      foreach($buscaAbono as $row => $item){
    echo'<tr>          
            <td>'.$item["idAbono"].'</td>
            <td>'.$item["cantidad"].'</td>
            <td>'.$item["fecha"].'</td>           
        </tr>';

      }
    } 

  }

  public function datosUpdateEstadoCita($idCita, $estado){
      $datos = array("id"=>$idCita,
                     "estado"=>$estado);             
  $respuesta = Datos::updateEstadoCita($datos);
  echo $respuesta;
  if($respuesta == "success"){
  echo '<script> window.location=index.php?action=abono&idCliente='.$_GET["idcliente"].'&nombre='.$_GET["nombrecliente"].';</script>';
 }
else{
echo '<script> window.location="ErrorupdateCliente";</script>';
  }
}



} //fin clase
