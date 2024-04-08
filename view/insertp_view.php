<?php 
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
                $message="Invalid Insertion!";
            }else{
                $message="Post Inserted Correctly!";
            }
        } else {
            $message="Data Invalid!";
        }                      
    }else {
        $message="Enter Post Information";
    }
    ?>

<?php include RACINE."/view/header_back.php";?>
    <main class="main">
        <div class="card">   
            <h2>Insert Post</h2>             
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