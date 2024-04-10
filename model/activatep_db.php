<?php
    include_once ("db_connection.php");
/**
 * The function `posts_invalid` retrieves posts that are not associated with any publication from a
 * database.
 * 
 * function `posts_invalid()` is returning an array of posts that are invalid, meaning
 * posts that are in the `post` table but not in the `publication` table based on the `id_post` column.
 */
    function posts_invalid(){
        try {
            $conn=connection();
            $query = $conn->prepare("SELECT * FROM post WHERE id_post NOT IN (SELECT id_post FROM publication)");
            $query->execute();  
            $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $e) {
            throw new Exception("Error validating the post: " . $e->getMessage());
        }
    }
/**
 * The function `pub_post` inserts a post into a database table with the specified user ID, post ID,
 * and publication date.
 * 
 * The `id_post` parameter in the `pub_post` function represents the unique identifier
 * of the post that is being published. This identifier is typically used to associate the post with a
 * specific record in the database or to differentiate it from other posts. It is passed as an argument
 * to the function when calling
 * The `id_user` parameter in the `pub_post` function represents the user ID of the user
 * who is publishing the post. This parameter is used to specify which user is associated with the post
 * being published.
 * 
 * function `pub_post` is returning the message "Post published correctly" if the post
 * insertion into the database is successful.
 */
    function pub_post($id_post,$id_user){
        try {
            $date = date('Y-m-d');
            $conn=connection();
            $query = $conn->prepare("INSERT INTO publication (id_user, id_post, date_pub) VALUES (:user, :post, :date)");
            $query->bindParam(":user", $id_user,PDO::PARAM_INT);
            $query->bindParam(":post", $id_post,PDO::PARAM_INT);
            $query->bindParam(":date", $date,PDO::PARAM_STR);
            $query->execute(); 
            $message="Post published correctly";
            return $message;
        } catch (PDOException $e) {
            throw new Exception("Error inserting the post: " . $e->getMessage());
        }
    }
?>