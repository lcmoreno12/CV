<?php 

if (isset($_POST['enviar'])){
	if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['comentarios']) && !empty($_POST['mail'])){
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido']; 
		$comentarios = $_POST['comentarios']; 
		$mail = $_POST['mail']; 

		$destinatario = 'luciacristinamoreno@gmail.com';
		$header= "Enviado desde el cv de Lu";
		$mensajeFull= $comentarios. "\nAtentamente:" .$nombre;

		mail($mail, $nombre, $comentarios, $header, $mensajeFull);

		if($mail){
			echo 'todo ok';
		
		}
	}
}

?>