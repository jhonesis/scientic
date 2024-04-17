<?php 
    /* This PHP code snippet checks if the HTTP request method is POST.
    It sanitizes and filters user input for titre (title), image, description, and resume.
    If all input data is valid, it converts the title to title case and capitalizes the first letter of the summary.
    Then it calls the add_post function to insert a post and provides appropriate messages based on the outcome.
    If the request method is not POST, it prompts the user to enter post information */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titre = htmlentities($_POST["titre"]);
        $titre = filter_var($titre, FILTER_SANITIZE_STRING);
        $resume = htmlentities($_POST["resume"]);
        $resume = filter_var($resume,FILTER_SANITIZE_STRING);
        
        if (empty($_POST["description"])) {
            $description ="#"; 
        } else {
            $description = htmlentities($_POST["description"]);
            $description = filter_var($description, FILTER_VALIDATE_URL);
        }

        if(isset($_FILES['file_img'])) {
            $route_file = $_FILES['file_img']['tmp_name'];
            // Validation type image
            $file_val = exif_imagetype($route_file);

            if($file_val !== false) {
                $size_file = $_FILES['file_img']['size'];

                if ($size_file < 2097152) {
                    $name_file = $_FILES['file_img']['name'];
                    $type_file = $_FILES['file_img']['type'];
                    $dir_file = 'assets/media/posts/';
                    $route_final = $dir_file . $name_file;
                    if(move_uploaded_file($route_file, $route_final)) {
                        $image=$route_final;
                        $message2= "Select a image (max - 2Mb).";
                    } else {
                        $message2="Error Uploading the image".$route_final."  ".$route_file;
                    }

                } else {
                    $message2="Size up the 2Mb";
                }

            } else {
                $message2="The file isn't a image";
            }

        } else {
            $message2= "Select ANY image (max - 2Mb).";
        }
        
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
        $message2= "Select a image (max - 2Mb).";
    }
?>

<?php include RACINE."/view/header_back.php";?>
    <main class="main">
        <div class="card">   
            <h2>Insert Post</h2>             
            <form action="?action=insertp" method="post" class="Form" enctype="multipart/form-data">
                <div class="card_text">
                    <p><?php echo $message;?></p>
                    <p><input type="text" name="titre" id="titre"  placeholder="Title" required></p>
                    <p><input type="url" name="description" id="description"   placeholder="Url Repository / + info"></p>
                    <label for="file_img"><?php echo $message2;?></label>
                    <input type="file" name="file_img" id="file_img" accept="image/jpeg, image/png, image/gif, image/jpg" required>
                </div>
                <div class="card_form">
                    <p><textarea name="resume" id="resume" cols="15" rows="10"  placeholder="Post Content" required></textarea></p>    
                    <p><input type="submit" value="Save" class="buttom"></p>
                </div>
            </form>
        </div>
    </main>
<?php include RACINE."/view/footer_back.php";?>