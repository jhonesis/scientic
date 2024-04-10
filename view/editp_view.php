<?php
/* This code snippet checks if the HTTP request method is POST. If it is, it sanitizes and filters user 
input for name, prenom (first name), email, and password. If all input data is valid, it converts the name 
to uppercase and capitalizes the first letter of prenom. Then it calls the edit_user function to update the 
user profile and provides appropriate messages based on the outcome. If the request method is not POST, it 
prompts the user to enter new information.*/

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and filter user input
        $nom_ed = htmlentities($_POST["ed_nom"]);
        $nom_ed = filter_var($nom_ed, FILTER_SANITIZE_STRING);
        $prenom_ed = htmlentities($_POST["ed_prenom"]);
        $prenom_ed = filter_var($prenom_ed, FILTER_SANITIZE_STRING);
        $email_ed = htmlentities($_POST["ed_email"]);
        $email_ed = filter_var($email_ed, FILTER_VALIDATE_EMAIL);
        $pass_ed = htmlentities($_POST["ed_pass"]);
        $pass_ed = filter_var($pass_ed, FILTER_SANITIZE_STRING);
        // Validate input and perform necessary actions    
        if ($nom_ed && $prenom_ed && $email_ed && $pass_ed) {
            // Convert name to uppercase and capitalize first letter of prenom
            $nom_ed = strtoupper($nom_ed);
            $prenom_ed = ucwords($prenom_ed);
            // Edit user profile and handle success/failure messages
            $message = edit_user($_SESSION["id_user"], $nom_ed, $prenom_ed, $email_ed, $pass_ed);
            if (empty($message)) {
                $message = "Invalid Edition!";
            } else {
                $message = "Profile edited successfully!";
                $_SESSION["nom"] = $nom_ed;
                $_SESSION["prenom"] = $prenom_ed;
                $_SESSION["email"] = $email_ed;
            }
        } else {
            $message = "Data Invalid!";
        }
    } else {
        $message = "Enter your new information.";
    }
?>
<?php include RACINE . "/view/header_back.php"; ?>
<main class="main">
    <div class="card">
        <h2>Edit Profile</h2>
        <form action="?action=editp" method="post" class="Form">
            <div class="card_text">
                <p><?php echo $message ?></p>
                <p><input type="text" name="ed_nom" id="ed_nom" value="<?php echo $_SESSION["nom"]; ?>"></p>
                <p><input type="text" name="ed_prenom" id="ed_prenom" value="<?php echo $_SESSION["prenom"]; ?>"></p>
            </div>
            <div class="card_form">
                <p><input type="email" name="ed_email" id="ed_email" value="<?php echo $_SESSION["email"]; ?>"></p>
                <p><input type="password" name="ed_pass" id="ed_pass" placeholder="Current or New Password" required>
                </p>
                <p><input type="submit" value="Save" class="buttom"></p>
            </div>
        </form>
    </div>
</main>
<?php include RACINE . "/view/footer_back.php"; ?>