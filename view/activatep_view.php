<?php  
    if (isset($_GET['id_author']) && isset($_GET['id_post'])) {
        $id_postv = htmlentities($_GET["id_post"]);
        $id_postv = filter_var($id_postv, FILTER_VALIDATE_INT);
        $id_authorv = htmlentities($_GET["id_author"]);
        $id_authorv = filter_var($id_authorv,FILTER_VALIDATE_INT);
    
        if ($id_postv && $id_authorv) {
            $credentials=pub_post($id_postv,$id_authorv);
            if(empty($credentials)){
                $message="Post is not published!";
            }
        }else{
            $message="Data Invalid!";
        }   
    }else{
        $message="Posts to validate";
    }
    $posts=posts_invalid();
    if (empty($posts)) {
        $message="All posts are published!";
    }
?>
<?php include RACINE."/view/header_back.php";?>
    <main class="main">
        <div class="card">  
            <h2>Activate Post</h2>            
            <?php
                foreach ($posts as $row) {
                    $id_post=$row["id_post"];
                    $titre=$row['titre'];
                    $image=$row['image'];
                    $resume=$row['resume'];
                    $description=$row['description'];
                    $id_author=$row['id_user'];
                ?>
                    <p><?php echo $message;?></p>
                    <div class="post_inv">
                        <div class="card_text">
                            <h3><?= $titre; ?></h3>
                            <img src="<?= $image ?>" alt="image Post">
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