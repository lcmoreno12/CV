<?php
if (isset($_POST['enviar']))
{
	if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['comentarios']) && !empty($_POST['mail']))
	{
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$mail = $_POST['mail'];
		$comentarios = $_POST['comentarios'];

		$to = "luciacristinamoreno@gmail.com";
		$subject = "Mensaje de la página del CV";
		$headers .= "From: ". strip_tags($mail) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($mail) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$msg = "<html><body>";
		$msg .= "<h2 style='font-weight:bold;border-bottom:1px solid #bbb;'>Nuevo mensaje</h2>\r\n";
		$msg .= "Enviado por: <strong>".$nombre."</strong><br />\r\n";
		$msg .= "Responder a: <strong>".$mail."</strong><br /><br />\r\n";
		$msg .= "Mensaje: <br />\r\n";
		$msg .= "<em>".$comentarios."</em><br />\r\n";
		$msg .= "</body></html>";

		if(mail($to, $subject, $msg, $headers)) {
			echo "Mensaje enviado";
		} else {
			echo "Error inesperado";
		}

		}else{
			echo "No se puede enviar ya que no completó todos los campos.";
	}
}
?>
