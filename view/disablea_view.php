<?php 
/* This PHP code block is handling form submission data when the HTTP request method is POST. */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_user = htmlentities($_POST["id_user"]);
        $id_user = filter_var($id_user, FILTER_VALIDATE_INT);
    
/* This code block is checking if the `id_user` variable has a valid integer value. If `id_user` is a
valid integer, it calls the `dis_acc()` function passing the `id_user` as a parameter. */
        if ($id_user) {
            $message= dis_acc($id_user);
            if (empty($message)) {
                $message="Invalid Disable!";
            }
        } else {
            $message="Data Invalid!";
        }                      
    }else {
        $message="Account to be disabled.";
    }
?>
<?php include RACINE."/view/header_back.php";?>
    <main class="main">
        <div class="card"> 
            <h2>Disable Account</h2>               
            <form action="?action=disablea" method="post" class="Form" >
                <div class="card_text">
                    <p><?php echo $message;?></p>
                    <p><input type="number" name="id_user" id="id_user"  placeholder="Id User" required></p>
                    <p><input type="submit" value="Disable" class="buttom"></p>
                </div>
                <div class="card_form">
                    <p><img src="assets/media/img_disable_min.webp" alt="image disable account" loading="lazy"></p>    
                </div>
            </form>
        </div>
    </main>
<?php include RACINE."/view/footer_back.php";?>