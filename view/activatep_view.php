<?php  
/* This PHP code block is responsible for handling the activation of a post based on the `id_author`
and `id_post` parameters received via the GET method. */
    if (isset($_GET['id_author']) && isset($_GET['id_post'])) {
        $id_postv = htmlentities($_GET["id_post"]);
        $id_postv = filter_var($id_postv, FILTER_VALIDATE_INT);
        $id_authorv = htmlentities($_GET["id_author"]);
        $id_authorv = filter_var($id_authorv,FILTER_VALIDATE_INT);
    
/* This block of code is checking if both `id_postv` and `id_authorv` have valid values. If both
variables have valid values, it calls the `pub_post` function with these values to attempt to
publish the post. */
        if ($id_postv && $id_authorv) {
            $credentials=pub_post($id_postv,$id_authorv);
            if(empty($credentials)){
                $message="Post is not published!";
            }else {
                $message="Post is published!";
            }
        }else{
            $message="Data Invalid!";
        }   
    }else{
        $message="Posts to validate";
    }
/* The code is checking if there are any invalid posts left to be published. */
    $posts=posts_invalid();
    if (empty($posts)) {
        $message="All posts are published!";
    }
?>
<?php include RACINE."/view/header_back.php";?>
    <main class="main">
        <div class="card">  
            <h2>Activate Post</h2>  
            <p><?php echo $message;?></p>          
            <?php
                foreach ($posts as $row) {
                    $id_post=$row["id_post"];
                    $titre=$row['titre'];
                    $image=$row['image'];
                    $resume=$row['resume'];
                    $description=$row['description'];
                    $id_author=$row['id_user'];
                ?>
                    <div class="post_inv">
                        <div class="card_text">
                            <h3><?= $titre; ?></h3>
                            <img src="<?=$image ?>" alt="image Post" loading="lazy">
                            <p><?= $resume; ?></p>
                            <p><a href="<?= $description ?>">Project details</a></p>
                            <p>Author: <?= $id_author ?></p>
                            <a href="?action=activatep&id_author=<?php echo $id_author; ?>&id_post=<?php echo $id_post; ?>" class="buttom">Activate Post</a>
                        </div>
                    </div>
                <?php
                }
            ?>
        </div>
    </main>
<?php include RACINE."/view/footer_back.php";?>