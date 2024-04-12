
<?php
require RACINE ."/model/signin_db.php";
/*This PHP code snippet checks if the HTTP request method is POST.
It sanitizes and filters user input for email_us and pass_us.
If both input fields are valid, it searches for user credentials.
If valid credentials are found, it starts a session and stores user information.
If the account is disabled, it provides an appropriate message.
If no valid credentials are found, it indicates incorrect or invalid credentials.
If the request method is not POST, it prompts the user to enter their credentials.*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_us = htmlentities($_POST['email_us']);
    $email_us = filter_var($email_us, FILTER_VALIDATE_EMAIL);
    $pass_us = htmlentities($_POST['pass_us']);
    $pass_us = filter_var($pass_us,FILTER_SANITIZE_STRING);

    if ($email_us && $pass_us) {
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
                header("Location: index.php");
                exit();
            }else{
                $message="Account Disabled";
            }
        }else {
            $message= "Invalid Credentials";
        }
    } else {
        $message= "Incorrect Credentials";
    }
} else{
    $message="Please enter your credentials";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style2.min.css">
    <title>ScienTIC</title>
</head>
<body>
    <main id="main_login">
        <h1 class="titles" id="logo_back"><strong>SCIEN<span class="special">TIC</span></strong></h1>
        <div class="login">
            <p><?=$message?></p>
            <form action="?action=signin" method="post" class="Form">
                <p><input type="email" name="email_us" id="email_us" required  placeholder="E-mail"></p>
                <p><input type="password" name="pass_us" id="pass_us" required placeholder="Password"></p>
                <p><input type="submit" value="Sign In" class="buttom"></p>
            </form>
        </div>
    </main>
    
</body>
<script>
        document.getElementById('loginForm').addEventListener('submit', function() {
            setTimeout(function() {
            document.getElementById('loginForm').reset();
            }, 1000);
        });
    </script>
</html>