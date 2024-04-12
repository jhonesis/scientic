<?php  include RACINE."/view/header.php";?>
<?php
require RACINE ."/model/register_db.php";
/*This PHP code snippet checks if the HTTP request method is POST.
It sanitizes and filters user input for nom_reg (last name), prenom_reg (first name), email_reg, and pass_reg (password).
If all input data is valid, it converts the last name to uppercase and capitalizes the first letter of the first name.
Then it calls the add_user function to register a new user and provides appropriate messages based on the outcome.
If the request method is not POST, it prompts the user to enter their information. */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_reg = htmlentities($_POST['nom_reg']);
    $nom_reg = filter_var($nom_reg, FILTER_SANITIZE_STRING);
    $prenom_reg = htmlentities($_POST['prenom_reg']);
    $prenom_reg = filter_var($prenom_reg, FILTER_SANITIZE_STRING);
    $email_reg = htmlentities($_POST['email_reg']);
    $email_reg = filter_var($email_reg, FILTER_VALIDATE_EMAIL);
    $pass_reg = htmlentities($_POST['pass_reg']);
    $pass_reg = filter_var($pass_reg,FILTER_SANITIZE_STRING);

    if ($nom_reg && $prenom_reg && $email_reg && $pass_reg) {
        $nom_reg=strtoupper($nom_reg);
        $prenom_reg=ucwords($prenom_reg);
        $message=add_user($nom_reg,$prenom_reg,$email_reg,$pass_reg);
        if (empty($message)) {
            $message="Register Invalid";
        }
    } else {
        $message="Data Invalid"; 
    }  
}else{
    $message="Please enter your Information";
}
?>


<div class="bg-dark"></br></br></br></div>
    <main class="container">
        <h1 class="titles text-dark my-5 text-center"><strong>Become Part of Our Team</strong></h1>
        <div class="row my-5 text-center d-flex align-items-center mx-auto gx-5">   
            <figure>
                <img src="assets/media/img_reg_min.webp" class="img-fluid w-50 mb-5" alt="image register" loading="lazy">
            </figure> 
            <div>
                <p class="titles display-6 text-info"><strong>Register</strong></p>
                <p class="text-dark-emphasis"><?=$message?></p>
                <form action="?action=register" method="post" id="reg_form">
                    <p><input type="text" name="nom_reg" id="nom_reg" class="form-control w-50 mx-auto" required placeholder="Last Name"></p>
                    <p><input type="text" name="prenom_reg" id="prenom_reg" class="form-control w-50 mx-auto" required placeholder="First Name"></p>
                    <p><input type="email" name="email_reg" id="email_reg" class="form-control w-50 mx-auto" required placeholder="Email"></p>
                    <p><input type="password" name="pass_reg" id="pass_reg" class="form-control w-50 mx-auto" required placeholder="Password"></p>
                    <p><input type="checkbox" name="rgpd" id="rgpd" class="me-2">I read and accept the <a href="#" data-bs-toggle="modal" data-bs-target="#legal">Information and Legal Notice</a></p>
                    <p><input type="submit" value="Register" class="form-control btn btn-dark w-25 my-3 me-2" disabled id="btn_reg"></p>
                </form>
            </div>
        </div>
    </main>
    <script>
        var checkbox = document.getElementById("rgpd");
        var boton = document.getElementById("btn_reg");

        checkbox.addEventListener('change', function() {
            boton.disabled = !checkbox.checked;
        });

        document.getElementById('reg_form').addEventListener('submit', function() {
            setTimeout(function() {
            document.getElementById('reg_form').reset();
            }, 1000);
        });
    </script> 
<?php include RACINE."/view/footer.php";?>    



