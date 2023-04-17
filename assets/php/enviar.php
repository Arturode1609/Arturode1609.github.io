<?php
// Obtener los datos del formulario
$correo_remitente = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

// Crear una variable para el destinatario del correo electrónico
$correo_destinatario = "destinatario@correo.com";

// Crear una variable para la cabecera del correo electrónico
$cabecera = "From: $correo_remitente\r\n";

// Enviar el correo electrónico
if (mail($correo_destinatario, $asunto, $mensaje, $cabecera)) {
  // Redirigir al usuario a una página de confirmación
  header('Location: confirmacion.html');
} else {
  // Si hay un error al enviar el correo, redirigir al usuario a una página de error
  header('Location: error.html');
}
?>
