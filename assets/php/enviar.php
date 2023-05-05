<?php
if(isset($_POST['email'])) {
 
    // Datos del correo electrónico
    $email_to = "notajex901@pixiil.com";
    $email_subject = "Mensaje enviado desde tu sitio web";
 
    function died($error) {
        // Manejo de errores
        echo "Lo sentimos, pero se encontraron errores en el formulario. ";
        echo "Estos errores aparecen a continuación:<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor, vuelve y corrige estos errores.<br /><br />";
        die();
    }
 
    // Validación de datos
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Lo sentimos, pero hubo un problema con el formulario que enviaste.');       
    }
 
    $name = $_POST['name']; // requerido
    $email_from = $_POST['email']; // requerido
    $message = $_POST['message']; // requerido
 
    $error_message = "";
 
    // Validación de formato de correo electrónico
    if (!filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
        $error_message .= 'La dirección de correo electrónico no es válida.<br />';
    }
 
    // Validación de longitud de mensaje
    if (strlen($message) < 2) {
        $error_message .= 'El mensaje que ingresaste es demasiado corto.<br />';
    }
 
    // Si se encontraron errores, mostrarlos
    if(strlen($error_message) > 0) {
        died($error_message);
    }
 
    // Construir mensaje de correo electrónico
    $email_message = "Detalles del formulario a continuación:\n\n";
 
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
 
    $email_message .= "Nombre: ".clean_string($name)."\n";
    $email_message .= "Correo electrónico: ".clean_string($email_from)."\n";
    $email_message .= "Mensaje: ".clean_string($message)."\n";
 
    // Encabezados del correo electrónico
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
    // Enviar correo electrónico
    @mail($email_to, $email_subject, $email_message, $headers);  
 
    // Redirigir a una página de "Gracias" después de enviar el correo electrónico
    header('Location: ../../index.html');
}
?>
