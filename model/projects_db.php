<?php
    include_once ("db_connection.php");

/**
 * The function `list_post` retrieves a list of posts with their titles and publication dates from a
 * database, ordered by publication date in descending order.
 * 
 * The `list_post` function is returning an array of associative arrays containing the
 * `id_post`, `titre`, and `date_pub` fields of posts ordered by `date_pub` in descending order.
 */
    function list_post(){
        try {
            $conn=connection();
            $query = $conn->prepare("SELECT post.id_post, post.titre, publication.date_pub FROM post, publication WHERE post.id_post = publication.id_post ORDER BY publication.date_pub DESC");
            $query->execute();  
            $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $e) {
            throw new Exception("Error validating the post: " . $e->getMessage());
        }
    }
?>