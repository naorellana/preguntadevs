<?php 
	$destino="1005alexis@gmail.com";
	$asunto=$_POST['opcion']."\r\n".
	'De: '.$_POST['nombre'];
	$mensaje='From:'.$_POST['correo']."\r\n".
	'Reply-To:'.$_POST['correo']."\r\n".
	'Comentario: '.$_POST['mensaje']."\r\n".
	'Atentamente: ' .$_POST['nombre']."\r\n".
	'X-Mailer:PHP/'.phpversion();
mail($destino, $asunto, $mensaje);

echo "Mensaje Enviado";
header('Location: http://norellana.hol.es/');
?>