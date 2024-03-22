<?php
// Iniciar la sesión
session_start();

// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email_us = htmlentities($_POST['email_us']);
    $email_us = filter_var($email_us, FILTER_SANITIZE_EMAIL);
    $pass_us = htmlentities($_POST['pass_us']);
    $pass_us = filter_var($pass_us,FILTER_SANITIZE_STRING);
    
    // Validar las credenciales (esto puede variar dependiendo de la estructura de tu base de datos)
    if ($email_us === 'jhonesis@gmail.com' && $pass_us === '987250jd') {
        // Credenciales válidas, iniciar sesión y redirigir a la página protegida
        $_SESSION['email_us'] = $email_us;
        $_SESSION['pass_us'] = $pass_us;
        header("Location: ../index.php");
        exit();
    } else {
        // Credenciales inválidas, mostrar mensaje de error
        echo "<span class='alert alert-danger pt-2'>Invalid email or password</span>";
    }

}

?>