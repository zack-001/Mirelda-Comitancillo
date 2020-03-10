<?php

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){

		if($enlacesModel == "iniciouser" ||
		   $enlacesModel == "pagoCita" ||
		   $enlacesModel == "datosUser" ||
		   $enlacesModel == "inicioAdmin" ||
		   $enlacesModel == "registroDoc" ||
		   $enlacesModel == "listadoDoc" ||
		   $enlacesModel == "actualizaDoc" ||
		   $enlacesModel == "eliminaDoc" ||
		   $enlacesModel == "registroTrat" ||
		   $enlacesModel == "movimientosCliente" ||
		   $enlacesModel == "listadotratamiento" ||
		   $enlacesModel == "listadoCliente" ||
		   $enlacesModel == "actualizatipoTrat" ||
		   $enlacesModel == "eliminatipoTrat" ||
		   $enlacesModel == "Citasrealizadas" ||
		   $enlacesModel == "modificauser" ||
		   $enlacesModel == "deleteDatos" ||
		   $enlacesModel == "citas" ||
		   $enlacesModel == "agregaCita" ||
		   $enlacesModel == "modFechaCita" ||
		   $enlacesModel == "modEstadoCita" ||
		   $enlacesModel == "totalValoracion" ||
		   $enlacesModel == "ingresos" ||
		   $enlacesModel == "IngresoFecha" ||
		   $enlacesModel == "consultaClienteabono" ||
		   $enlacesModel == "mostraredoCuenta" ||
		   $enlacesModel == "viewClientes" ||
		   $enlacesModel == "edocuenta" ||
		   $enlacesModel == "listadocitasUser" ||
		   $enlacesModel == "listadoEdocuentaUser" ||
		   $enlacesModel == "listadoabonosUser" ||
		   $enlacesModel == "iniciouserAdmin" ||
		   $enlacesModel == "historial" ||
		   $enlacesModel == "abonos" ||
		   $enlacesModel == "login" ||
		   $enlacesModel == "logout" ||
		   $enlacesModel == "AgregarRecetas" ||
		   $enlacesModel == "listaTratamientosUser"
		   ){

			$module = "View/modules/".$enlacesModel.".php";
		}
		else if($enlacesModel == "index" ){
			$module = "View/modules/login.php";
		}

		else if($enlacesModel == "fallo" ){
			$module = "View/modules/login.php";
		}
		else if($enlacesModel == "OkCliente" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "ErrorCliente" ){
			$module = "View/modules/iniciouser.php";
		}
		else if($enlacesModel == "ErrorUser" ){
			$module = "View/modules/iniciouser.php";
		}
		else if($enlacesModel == "Nickduplicado" ){
			$module = "View/modules/iniciouser.php";
		}
		
		else if($enlacesModel == "OkupdateCliente" ){
			$module = "View/modules/datosUser.php";
		}
		else if($enlacesModel == "ErrorupdateCliente" ){
			$module = "View/modules/datosUser.php";
		}

		else if($enlacesModel == "OkDoc" ){
			$module = "View/modules/listadoDoc.php";
		}
		else if($enlacesModel == "ErrorDoc" ){
			$module = "View/modules/registroDoc.php";
		}

		else if($enlacesModel == "OkupdateDoc" ){
			$module = "View/modules/listadoDoc.php";
		}
		else if($enlacesModel == "ErrorupdateDoc" ){
			$module = "View/modules/actualizaDoc.php";
		}
		else if($enlacesModel == "duplicadoDoc" ){
			$module = "View/modules/registroDoc.php";
		}
		else if($enlacesModel == "deleteokDoc" ){
			$module = "View/modules/listadoDoc.php";
		}
		else if($enlacesModel == "deleteerrorDoc" ){
			$module = "View/modules/listadoDoc.php";
		}
		else if($enlacesModel == "Oktipotratamiento" ){
			$module = "View/modules/listadotratamiento.php";
		}
		else if($enlacesModel == "deleteerrorDoc" ){
			$module = "View/modules/Errortipotratamiento.php";
		}

		else if($enlacesModel == "updateTratamiento" ){
			$module = "View/modules/listadotratamiento.php";
		}
		else if($enlacesModel == "errorTratamiento" ){
			$module = "View/modules/listadotratamiento.php";
		}

		else if($enlacesModel == "deleteoktipoTramientos" ){
			$module = "View/modules/listadotratamiento.php";
		}
		else if($enlacesModel == "deleteerrortipoTramientos" ){
			$module = "View/modules/listadotratamiento.php";
		}
		else if($enlacesModel == "errorFecha" ){
			$module = "View/modules/iniciouser.php";
		}

		else if($enlacesModel == "Okrefresh" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "errorRefresh" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "ErrorrefreshUser" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "deleteOKtodo" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "ErrordeleteUser" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "ErrordeleteCliente" ){
			$module = "View/modules/listadoCliente.php";
		}

		else if($enlacesModel == "errorFechaCita" ){
			$module = "View/modules/citas.php";
		}
		else if($enlacesModel == "errorFechaproximoCita" ){
			$module = "View/modules/citas.php";
		}
		else if($enlacesModel == "Okcitaprogramada" ){
			$module = "View/modules/Citasrealizadas.php";
		}
		else if($enlacesModel == "Errorcitaprogramada" ){
			$module = "View/modules/citas.php";
		}
		else if($enlacesModel == "errorFechaproximoigualaCita" ){
			$module = "View/modules/citas.php";
		}

		else if($enlacesModel == "ErrorValoracion" ){
			$module = "View/modules/Citasrealizadas.php";
		}
		else if($enlacesModel == "ErrorCuenta" ){
			$module = "View/modules/Citasrealizadas.php";
		}
		else if($enlacesModel == "CuentaOk" ){
			$module = "View/modules/Citasrealizadas.php";
		}

		else if($enlacesModel == "edocuentapagada" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "abonomayorque" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "OkAbono" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "ErrorAbono" ){
			$module = "View/modules/listadoCliente.php";
		}
		else if($enlacesModel == "okUpdateCita" ){
			$module = "View/modules/Citasrealizadas.php";
		}
		else if($enlacesModel == "okTerminarCita" ){
			$module = "View/modules/abonos.php";
		}
		
		
/*
		else if($enlacesModel == "errorUser" ){
			$module = "View/modules/iniciouser.php";
		} */
	
           else{

			$module = "View/modules/login.php";

		}

		


		return $module;

	}

}


?>
