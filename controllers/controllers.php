<?php 
class Mvc{
	public function template(){
		include "views/template.php";
	}
	public function enlacesController(){
		if(isset($_GET["action"])){
			$enlaces = $_GET["action"];
		}
		else{
			$enlaces = "index";
		}
		$respuesta = MvcModels::enlacesModel($enlaces);
		include $respuesta;
	}
	public function mensaje()
	{
		if (isset($_POST['nombre'])){
				$nombre=$_POST['nombre'];
				$apellidos=$_POST['apellidos'];
				$celular=$_POST['celular'];
				$correo=$_POST['correo'];
				$asunto=$_POST['asunto'];
				$texto=$_POST['mensaje'];
				$para ='info@gesadconsultores.com.mx';
				$titulo    = 'Pagina web: '.$asunto."\n";
				$mensaje   = 'Nombre: '.$nombre."\n";
				$mensaje   = 'Apellidos: '.$apellidos."\n";
				$mensaje.= 'celular: '.$celular."\n";
				$mensaje.= 'Asunto: '.$asunto."\n";
				$mensaje.= 'Correo: '.$correo."\n";
				$mensaje.= 'Mensaje: '.$texto;
				$headers = 'From: '.$correo."\r\n".
				'Reply-To: '.$correo."\r\n" .
				'X-Mailer: PHP/' . phpversion();

				if(mail($para, $titulo, $mensaje,$headers)){
					echo'<script>
							alert("Mensaje enviado");
							window.location="home";
						</script>';
				}
				else{
					echo '<div class="alert alert-danger">Error al enviar mensaje. Intente de nuevo</div>';
				}
		}
	}

}

 ?>