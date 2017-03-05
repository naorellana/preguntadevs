<?php 
	$destino=$_POST['email'];
	$asunto="comentario";

	$comentario="
		Email:$_POST[email]
		Comentario:$_POST[comentario]
	";
$headers='From:'.$_POST['email']."\r\n".
	'Reply-To:'.$_POST['email']."\r\n".
	'X-Mailer:PHP/'.phpversion();

mail($destino, $comentario, $headers);
mail(purificadoraaguadulcevida@gmail.com, subject, message)

echo "Mensaje Enviado";
?>