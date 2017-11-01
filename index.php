<?php 
	date_default_timezone_set("America/Mexico_City");
	require_once "models/models.php";

	require_once "controllers/controllers.php"; 
	
	$template = new Mvc();
	$template -> template();
 ?>