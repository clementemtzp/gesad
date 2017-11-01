<?php include 'views/modules/menu.php';
	$mvc= new Mvc();
?>
<div class="principal" id="contacto">
	<div class="container">
		<div class="col-md-6">
			<h1>Asesoría<br> Contable y Jurídica</h1>
			<h4>Ofrecemos soluciones adecuadas a tus necesidades.</h4>
		</div>			
		<div class="col-md-6">
			<form class="formulario" method="POST">
				<h3 class="text-center">Contacto</h3>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="text" class="form-control" placeholder="Nombre*" name="nombre" required autofocus="true">
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="text" class="form-control" placeholder="Apellidos*" name="apellidos" required>
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="email" class="form-control" placeholder="Email*" name="correo" required>
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="tel" class="form-control" placeholder="Celular" name="celular" required>
				    </div>
				</div>
				<div class="col-md-12">
					<select class="form-control" name="asunto">
				        	<option value="">Selecciona un servicio*</option>
				        	<option value="Civil">Civil</option>
				        	<option value="Familiar">Familiar</option>
				        	<option value="Laboral">Laboral</option>
				        	<option value="Agrario">Agrario</option>
				        	<option value="Administrativo">Administrativo</option>
				        	<option value="Penal">Penal</option>
				        	<option value="Municipal">Municipal</option>
				        	<option value="Amparos">Amparos</option>
				        	<option value="Mercantil">Mercantil</option>
				        	<option value="Electoral">Electoral</option>
			        </select>
				<br>
				</div>
				<div class="col-md-12">
					<div class="form-group">
				        <textarea class="form-control" rows="7" placeholder="Mensaje" name="mensaje"></textarea>
				    </div>
				</div>
				<div class="col-md-12">	
				    <p class="text-center"><button type="submit" class="btn btn-primary btn-lg boton">E N V I A R</button></p>
				</div>
			</form>
			<?php 
				$mvc->mensaje();
			 ?>
		</div>			
	</div>
</div>
<div  id="servicios" class="container">
	<h1 class="text-center">Nuestros Servicios</h1>
	<div class="col-xs-12">
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-legal fa-5x"></i></p>
			<h3 class="text-center">Civil</h3>
			<p class="text-center">Reivindicatorias, plenarios de posesión, terminación de contratos, aclaración de actas, interdictos, separación de conyuges, divorcios, servidumbres, entre otros.</p>
		</div>
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-user-circle-o fa-5x"></i></p>
			<h3 class="text-center">Familiar</h3>
			<p class="text-center">Pensionas alimenticias, guardia y custodia, convivencias, reconocimientos de paternidad, sucesorios intestamentarios, entre otros.</p>
		</div>
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-industry fa-5x"></i></p>
			<h3 class="text-center">Laboral</h3>
			<p class="text-center">Reivindicatorias, plenarios de posesión, terminación de contratos, aclaración de actas, interdictos, separación de conyuges, divorcios, servidumbres, entre otros.</p>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-flag fa-5x"></i></p>
			<h3 class="text-center">Agrario</h3>
			<p class="text-center">Demandas agrarias, sucesorios intestamentarios, entre otros.</p>
		</div>
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-building fa-5x"></i></p>
			<h3 class="text-center">Administrativo</h3>
			<p class="text-center">Nulidad de Infracciones de tránsito estatales y federales, nulidad de multass estatales y federales, demandas de nulidad, recuros de reconsideración, creacion de sociedades, corrección de actas, emplacamientos, quejas ante dependencias gubernamentales.</p>
		</div>
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-briefcase fa-5x"></i></p>
			<h3 class="text-center">Penal</h3>
			<p class="text-center">Presentación de denuncias, procesos penales</p>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-university fa-5x"></i></p>
			<h3 class="text-center">Municipal</h3>
			<p class="text-center">Apeso y deslindes, permisos de subdivisión, permisos de contrucción, permisos comerciales, entre otros</p>
		</div>
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-blind fa-5x"></i></p>
			<h3 class="text-center">Amparos</h3>
			<p class="text-center">Juicios de garantias en contra de todo tipo de actos de autoridad</p>
		</div>
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-truck fa-5x"></i></p>
			<h3 class="text-center">Mercantil</h3>
			<p class="text-center">Juicios ejecutivos mercantiles</p>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="col-md-4"></div>
		<div class="col-md-4 caja">
			<p class="text-center"><i class="fa fa-address-card fa-5x"></i></p>
			<h3 class="text-center">Electoral</h3>
			<p class="text-center">Juicios para la protección de los derechos políticos electorales del ciudadano, entre otros.</p>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>