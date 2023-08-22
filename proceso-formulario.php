<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $contexto = $_POST["contexto"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "drrkermazyxokv@gmail.com"; 

    $asunto = "Nuevo mensaje del formulario";
    $contenido = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email\nContexto: $contexto\nMensaje:\n$mensaje";

    mail($destinatario, $asunto, $contenido);

    // Redirigir al usuario a una página de confirmación o mostrar un mensaje de éxito
    header("Location: confirmacion.html");
}
?>
