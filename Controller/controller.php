 <?php
class Dental{

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
    
  public function registroUser(){
    if (isset($_POST["registro"])) {
              date_default_timezone_set('America/Mexico_City');
              $hoy= date("d-m-Y H:i:s");
              $tipo = "Usuario";
              $datos=array("nombre"=>$_POST["nombre"],
                           "tipo"=>$tipo,
                           "nick"=>$_POST["email"],
                           "telefono"=>$_POST["telefono"],
                           "pass"=>$_POST["pass"]);
               $respuesta=Datos::registraUser($datos);
               if ($respuesta == "success") {                
                    echo '<script>window.location="okUser";</script>';
               }
               else{
                   echo '<script>window.location="errorUser";</script>';
               }                   
          }
  }






} //fin clase
