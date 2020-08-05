<?php

	//Llamada a los campos.

	$name = S_POST['name'];
	$surname = S_POST['surname'];
	$mail= S_POST ['mail'];
	$message = S_POST['message'];

	//Datos para el correo.

	$destination = "roaragon93@gmail.com";
	$asunto = "Message sent from the Tebra website.";

	$carta = "From: $name $surname \n";
	$carta .= "Mail: $mail \n";
	$carta .= "Message: $message";

	//Enviando mensaje.

	$mail = mail($destination, $asunto, $carta);

	if ($mail) {
		echo "<h4> Mail successfully sent! </h4>";
	}

?>