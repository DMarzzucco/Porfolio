<?php
$nombre = isset($_POST["nombre"]) ? htmlspecialchars($_POST["nombre"]) : "";
$telefono = isset($_POST["telefono"]) ? htmlspecialchars($_POST["telefono"]) : "";
$email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
$contexto = isset($_POST["contexto"]) ? htmlspecialchars($_POST["contexto"]) : "";
$mensaje = isset($_POST["mensaje"]) ? htmlspecialchars($_POST["mensaje"]) : "";
// 
ini_set('SMTP', 'localhost');
ini_set('smtp_port', 25);


$contenido_mensaje = 'Este mensaje fue enviado por ' . $nombre . ".\r\n";
$contenido_mensaje .= 'Su teléfono es: ' . $telefono . ".\r\n";
$contenido_mensaje .= 'Su email es: ' . $email . ".\r\n";
$contenido_mensaje .= 'Su contexto es: ' . $contexto . ".\r\n";
$contenido_mensaje .= 'Su mensaje es: ' . $mensaje . ".\r\n";
$contenido_mensaje .= 'Enviado el: ' . date('d/m/Y', time());

$destinatario = "drrkermazyxokv@gmail.com";
$asunto = "Nuevo mensaje del formulario";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

if (mail($destinatario, $asunto, $contenido_mensaje, $headers)) {
    header("Location: confirmacion_formulario.html");
    // header ("mensaje enviado");
} else {
    echo "Error al enviar el correo. Por favor, inténtalo nuevamente. Detalles: " . error_get_last()['message'];
}
?>