<?php
    include_once ("db_connection.php");

    function list_post(){
        try {
            $conn=connection();
            $query = $conn->prepare("SELECT post.id_post, post.titre, publication.date_pub FROM post, publication WHERE post.id_post = publication.id_post");
            $query->execute();  
            $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $e) {
            throw new Exception("Error validating the post: " . $e->getMessage());
        }
    }

?>