<?php include RACINE."/view/header.php";?>
    
    <div class="bg-dark"></br></br></br></div>
    <main class="container">
        <h1 class="titles text-center pt-4 pb-md-5">List Projects</h1>
        <div id="list_post"></div>
        <script src="./assets/js/list_post.js"></script>
        
        <?php

            foreach ($list_post as $row) {
                $id=$row["id_post"];
                $titre=$row['titre'];
                $date=$row['date_pub'];
                echo "<script languaje='javascript' type='text/javascript'>list('$titre', '$date', '$id');</script>";
            }

        ?>

    </main>
    
<?php include RACINE."/view/footer.php";?>    