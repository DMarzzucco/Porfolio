<?php
// variantes las cuales toman los datos del imput y del textarea 
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$contexto = $_POST["contexto"];
$mensaje = $_POST["mensaje"];

// la forma en cómo llegará al correo
$contenido_mensaje = 'Este mensaje fue enviado por ' . $nombre . ".\r\n";
$contenido_mensaje .= 'Su teléfono es: ' . $telefono . ".\r\n";
$contenido_mensaje .= 'Su email es: ' . $email . ".\r\n";
$contenido_mensaje .= 'Su contexto es: ' . $contexto . ".\r\n";
$contenido_mensaje .= 'Su mensaje es: ' . $mensaje . ".\r\n";
$contenido_mensaje .= 'Enviado el: ' . date('d/m/Y', time());

// la redireccion y el mensaje que le llegara a la persona
$destinatario = "drrkermazyxokv@gmail.com";
$asunto = "Nuevo mensaje del formulario";

// Cabeceras del correo
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// funcion la cual toma los datos del form y lo redirige a la direccion predetiminada
if (mail($destinatario, $asunto, ($contenido_mensaje), $headers)) {
    //en el caso que todo haya salido bien, se redirigira a ese documento html 
    header("Location: confirmacion_formulario.html");
} else {
    // En el caso contrario, saldra esto en la consola. 
    echo "Error al enviar el correo. Por favor, inténtalo nuevamente.";
}

?>