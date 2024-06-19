<?php
// Recibir datos del formulario
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$celular = $_POST['celular'];

// Configurar correo electrónico
$to = 'test@horitest.cl';
$subject = 'Nueva solicitud de acceso';
$message = "Nombre: $nombre\nEmpresa: $empresa\nEmail: $email\nCelular: $celular";
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Enviar correo electrónico
mail($to, $subject, $message, $headers);

// Redireccionar a la página de registro
header('Location: https://registro.horitest.cl/regsal.html');
exit;
?>
