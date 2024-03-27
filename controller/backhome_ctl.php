<?php
if(!isset($_SESSION['email'])) {
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
    echo $_SESSION["id_user"],$_SESSION["nom"],$_SESSION["prenom"],$_SESSION["email"],$_SESSION["pass"],$_SESSION["role"];
    ?>
</body>
</html>
