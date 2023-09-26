<?php
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $contexto = $_POST["contexto"];
    $mensaje = $_POST["mensaje"];

// Forma en cómo llegará
$contenido_mensaje = 'Este mensaje fue enviado por ' . $nombre . ".\r\n";
$contenido_mensaje .= 'Su teléfono es: ' . $telefono . ".\r\n";
$contenido_mensaje .= 'Su email es: ' . $email . ".\r\n";
$contenido_mensaje .= 'Su contexto es: ' . $contexto . ".\r\n";
$contenido_mensaje .= 'Su mensaje es: ' . $mensaje . ".\r\n";
$contenido_mensaje .= 'Enviado el: ' . date('d/m/Y', time());

// Destinatario y asunto
$destinatario = "drrkermazyxokv@gmail.com";
$asunto = "Nuevo mensaje del formulario";

// Cabeceras del correo
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// Enviar el correo
if (mail($destinatario, $asunto, utf8_decode($contenido_mensaje), $headers)) {
    //
    header("Location: confirmacion_formulario.html");
} else {
    // Si el envío de correo falla
    echo "Error al enviar el correo. Por favor, inténtalo nuevamente.";
}

?>
