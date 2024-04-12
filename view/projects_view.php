<?php include RACINE."/view/header.php";?>
    
<div class="bg-dark pt-5 pb-4"></div>
    <main class="container">
        <h1 class="titles text-dark my-5"><strong>Shared Projects for You.</strong></h1>
        <div id="list_post"></div>
        <script src="./assets/js/list_post.js"></script>      
        <?php
            foreach ($list_post as $row) {
                $id=$row["id_post"];
                $titre=$row['titre'];
                $date=$row['date_pub'];
                echo "<script language='javascript' type='text/javascript'>list('$titre', '$date', '$id');</script>";
            }
        ?>
    </main>
    
<?php include RACINE."/view/footer.php";?>    