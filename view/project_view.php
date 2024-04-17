<?php include RACINE."/view/header.php";?>
<div class="bg-dark pt-5 pb-4"></div>
    <main class="container text-center">
        <h1 class="titles pt-4 pb-md-5"><?=$post["titre"]?></h1>
        <img src="<?=$post["image"]?>" alt="image post" class="img-fluid w-50 mb-3">
        <p class="text-secondary py-2 text-start"><?=$post["resume"]?></p>
        <?php
            if ($post["description"] !== "#") { ?>
                <a class="btn btn-outline-dark py-2" href="https://<?=$post["description"]?>" target="_blank">Find the Project Repository Here</a>
           <?php }
        ?>
        
        <h5 class="text-info py-2 text-end"><em>Publication date: <?=$post["date_pub"]?></em></h5>
        <h5 class="text-info py-2 text-end"><em>Author: <?=$post["nom"]." ".$post["prenom"]?></em></h5>      
    </main> 
<?php include RACINE."/view/footer.php";?>    