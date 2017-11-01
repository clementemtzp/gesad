<?php

class MvcModels{
	public function enlacesModel($enlaces){
		if( $enlaces == "home" ||
			$enlaces == "software"){
			$module ="views/modules/".$enlaces.".php";
		}
	else if($enlaces== "index"){
		$module = "views/modules/home.php";
	}
	else{
		$module = "views/modules/home.php";
	}
	return $module;
	}
}

 ?>