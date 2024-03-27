<?php
require("../confi/config.php");
require RACINE ."/model/validate_db.php";

// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email_us = htmlentities($_POST['email_us']);
    $email_us = filter_var($email_us, FILTER_SANITIZE_EMAIL);
    $pass_us = htmlentities($_POST['pass_us']);
    $pass_us = filter_var($pass_us,FILTER_SANITIZE_STRING);
    $credentials=search_user($email_us,$pass_us);
    
    if(!empty($credentials)){
        $_SESSION["id_user"]=$credentials["id_user"];
        $status=acc_valid($_SESSION["id_user"]);
        if($status==true){
            session_start();
            $_SESSION["id_user"]=$credentials["id_user"];
            $_SESSION["nom"]=$credentials["nom"];
            $_SESSION["prenom"]=$credentials["prenom"];
            $_SESSION["email"]=$credentials["email"];
            $_SESSION["pass"]=$credentials["pass"];
            $_SESSION["role"]=$credentials["role"];
            header("Location: ../index.php");
            exit();
        }else{
            echo "Account Disabled";
        }
    }else {
        echo "Invalid Credentials";
    }
}
?>