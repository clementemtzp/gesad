<!DOCTYPE html>
<html>
<head>
	<title>Gesad Consultores</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="views/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>	
	<?php 
		$enlaces=new Mvc();
		$enlaces->enlacesController();
	 ?>
	<footer>
		<div class="container">
			<div class="col-md-4">
				<p>&copy<?=date('Y')?> Gesad Consultores SC</p>
			</div>
			<div class="col-md-4">
				<p class="text-center">(951) 233 9839</p>
				<p class="text-center">hola@gesadconsultores.com.mx</p>
				<p class="text-center">Ave. Hidalgo 1706 altos int 3, Centro, Oaxaca de Juárez, Oaxaca, México, CP 68000.</p>
			</div>
			<div class="col-md-4">
				<p class="text-right">
					<a href="#" target="_blank"><i class="fa fa-facebook fa-3x rs"></i></a>
					<a href="#" target="_blank"><i class="fa fa-twitter fa-3x rs"></i></a>
					<a href="#" target="_blank"><i class="fa fa-instagram fa-3x rs"></i></a>
				</p>
			</div>

		</div>
		<p class="text-center"><i class="fa fa-code"></i> by <a href="http://emtycorp.com.mx/software" target="_blank">Emty Software</a></p>
	</footer>
	<script type="text/javascript" src="views/js/jquery.js"></script>
	<script type="text/javascript" src="views/js/bootstrap.min.js"></script>
</body>
</html>