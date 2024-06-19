<?php
// Verificar si se ha enviado un valor para la contraseña
if(isset($_POST['password'])) {
    // Obtener la contraseña enviada desde el formulario
    $password = $_POST['password'];
    
    // Comprobar si la contraseña es correcta
    if($password === 'arketipo') { // Reemplazar 'contraseña' con la contraseña deseada
        // Redirigir a la página deseada
        header("Location: https://www.horitest.cl");
        exit();
    } else {
        // Si la contraseña no es correcta, redirigir a la página de login con un mensaje de error
        header("Location: login.php?error=incorrect_password");
        exit();
    }
} else {
    // Si no se ha enviado ningún valor para la contraseña, redirigir a la página de login
    header("Location: login.php");
    exit();
}
?>
