<?php
    require RACINE ."/model/project_db.php";
    if (isset($_GET['action']) && $_GET['action']=="project") {
        if (isset($_GET['id'])) {
            $id_post = $_GET['id'];
            $post=post_valid($id_post);
            if (!empty($post)) {
                require RACINE."/view/project_view.php";
            }else{
                echo "<h1>Id Post not found</h1>";
            }
        } else {
            echo "<h1>Post ID not received</h1>";
        }
    } 
?>