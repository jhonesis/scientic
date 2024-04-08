<?php 

/* edition user
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom_ed = htmlentities($_POST["ed_nom"]);
        $nom_ed = filter_var($nom_ed, FILTER_SANITIZE_STRING);
        $prenom_ed = htmlentities($_POST["ed_prenom"]);
        $prenom_ed = filter_var($prenom_ed, FILTER_SANITIZE_STRING);
        $email_ed = htmlentities($_POST["ed_email"]);
        $email_ed = filter_var($email_ed, FILTER_VALIDATE_EMAIL);
        $pass_ed = htmlentities($_POST["ed_pass"]);
        $pass_ed = filter_var($pass_ed,FILTER_SANITIZE_STRING);
    
        if ($nom_ed && $prenom_ed && $email_ed && $pass_ed) {
            $nom_ed=strtoupper($nom_ed);
            $prenom_ed=ucwords($prenom_ed);
            $message= edit_user($_SESSION["id_user"],$nom_ed,$prenom_ed,$email_ed,$pass_ed);
            if (empty($message)) {
                $message="<span class='alert alert-danger  text-danger'>Invalid Edition!</span>";
            }else{
                $message="<span class='alert alert-success  text-success'>Profile edited successfully!</span>";
            }
        } else {
            $message="<span class='alert alert-danger  text-danger'>Data Invalid!</span>";
        }                      
    }else {
        $message="<span  class='alert alert-warning'>Enter your current password or a new one.</span>";
    }*/

    /* insert post */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titre = htmlentities($_POST["titre"]);
        $titre = filter_var($titre, FILTER_SANITIZE_STRING);
        $image = htmlentities($_POST["image"]);
        $image = filter_var($image, FILTER_VALIDATE_URL);
        $description = htmlentities($_POST["description"]);
        $description = filter_var($description, FILTER_VALIDATE_URL);
        $resume = htmlentities($_POST["resume"]);
        $resume = filter_var($resume,FILTER_SANITIZE_STRING);
    
        if ($titre && $image && $description && $resume) {
            $titre=ucwords($titre);
            $resume=ucfirst($resume);
            $message= add_post($titre,$image,$resume,$description,$_SESSION["id_user"]);
            if (empty($message)) {
                $message="<span class='alert alert-danger  text-danger'>Invalid Insertion!</span>";
            }else{
                $message="<span class='alert alert-success  text-success'>Post Inserted Correctly!</span>";
            }
        } else {
            $message="<span class='alert alert-danger  text-danger'>Data Invalid!</span>";
        }                      
    }else {
        $message="<span  class='alert alert-warning'>Disable Account.</span>";
    }

    ?>
<!--    
<!DOCTYPE html>
<html>
<head>
    <title>Página Privada</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    edition user
    <div class="rounded-2 bg-white shadow m-5 py-3 w-50 text-center">
        <p class="py-3"><?php //echo $message?></p>
        <form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
            <p><input type="text" name="ed_nom" id="ed_nom" value="<?php // echo $_SESSION["nom"]; ?>" class="form-control w-50 mx-auto"></p>
            <p><input type="text" name="ed_prenom" id="ed_prenom" value="<?php //echo $_SESSION["prenom"]; ?>" class="form-control w-50 mx-auto"></p>
            <p><input type="email" name="ed_email" id="ed_email" value="<?php //echo $_SESSION["email"]; ?>" class="form-control w-50 mx-auto"></p>
            <p><input type="password" name="ed_pass" id="ed_pass" placeholder="Current or New Password" required class="form-control w-50 mx-auto"></p>
            <p><input type="submit" value="Save" class="btn btn-dark px-4 py-2"></p>
        </form>
        <a href="?action=logout" class="btn btn-info">Logout</a>
    </div>

    insert post 
    <div class="rounded-2 bg-white shadow m-5 py-3 w-50 text-center">
        <p class="py-3"><?php //echo $message;?></p>
        <form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
            <p><input type="text" name="titre" id="titre" class="form-control w-50 mx-auto" placeholder="Title"></p>
            <p><input type="url" name="image" id="image" class="form-control w-50 mx-auto" placeholder="Url Image"></p>
            <p><input type="url" name="description" id="description"  class="form-control w-50 mx-auto" placeholder="Url Repository / + info"></p>
            <p><textarea name="resume" id="resume" cols="15" rows="10" class="form-control w-50 mx-auto" placeholder="Post Content"></textarea></p>    
            <p><input type="submit" value="Save" class="btn btn-dark px-4 py-2"></p>
        </form>
        <a href="?action=logout" class="btn btn-info">Logout</a>
    </div> 

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>-->
<?php include RACINE."/view/header_back.php";?>

    <main class="main">
        <div class="card">                
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="Form" >
                <div class="card_text">
                    <p><?php echo $message;?></p>
                    <p><input type="text" name="titre" id="titre"  placeholder="Title" required></p>
                    <p><input type="url" name="image" id="image"  placeholder="Url Image" required></p>
                    <p><input type="url" name="description" id="description"   placeholder="Url Repository / + info" required></p>
                </div>
                <div class="card_form">
                    <p><textarea name="resume" id="resume" cols="15" rows="10"  placeholder="Post Content" required></textarea></p>    
                    <p><input type="submit" value="Save" class="buttom"></p>
                </div>
            </form>
        </div>
    </main>

<?php include RACINE."/view/footer_back.php";?>