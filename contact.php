<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to = "guavijuunicrem@gmail.com"; // Cambia esto por tu dirección de correo
    $subject = "Nuevo mensaje de contacto de $name";
    $body = "Nombre: $name\nCorreo Electrónico: $email\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mensaje enviado exitosamente'); window.location.href = 'contact.html';</script>";
    } else {
        echo "<script>alert('Hubo un problema al enviar el mensaje. Intenta nuevamente.'); window.location.href = 'contact.html';</script>";
    }
} else {
    header("Location: contact.html");
    exit();
}
?>
