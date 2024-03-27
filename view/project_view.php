<?php include RACINE."/view/header.php";?>
    <div class="bg-dark container-fluid"></br></br></br></div>
    <main class="container">
        <h1 class="titles text-center pt-4 pb-md-5"><?=$post["titre"]?></h1>
        <p class="text-secondary text-center py-2"><?=$post["image"]?></p>
        <p class="text-secondary py-2"><?=$post["resume"]?></p>
        <a class="btn btn-outline-dark py-2" href="https://<?=$post["description"]?>" target="_blank">Find the Project Repository Here</a>
        <h5 class="text-info py-2 text-end"><em>Publication date: <?=$post["date_pub"]?></em></h5>
        <h5 class="text-info py-2 text-end"><em>Author: <?=$post["nom"]." ".$post["prenom"]?></em></h5>      
    </main>
    
<?php include RACINE."/view/footer.php";?>    