<?php
// Verificar si la sesión está iniciada
if(!isset($_SESSION['email_us'])) {
    header("Location: 404_ctl.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página Privada</title>
</head>
<body>
    <a href="?action=logout">Logout</a>

    <?php
            echo $_SESSION['email_us'];
            echo $_SESSION['pass_us'];
    ?>
</body>
</html>
