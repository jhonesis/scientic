<?php
    require RACINE ."/model/project_db.php";
/* This PHP code snippet is checking if the URL parameters contain an 'action' parameter with the value
'project'. If this condition is met, it further checks if there is an 'id' parameter in the URL. If
the 'id' parameter is present, it assigns its value to the variable  and then calls the
function post_valid() to search the post valid. */

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