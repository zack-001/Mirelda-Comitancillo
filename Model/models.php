<?php

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){

		if($enlacesModel == "inicio"){

			$module = "View/modules/".$enlacesModel.".php";
		}
		else if($enlacesModel == "index" ){
			$module = "View/modules/inicio.php";
		}

		else if($enlacesModel == "okUser" ){
			$module = "View/modules/inicio.php";
		}

		else if($enlacesModel == "errorUser" ){
			$module = "View/modules/inicio.php";
		}
	
           else{

			$module = "View/modules/inicio.php";

		}

		


		return $module;

	}

}


?>
