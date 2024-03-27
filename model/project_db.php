<?php
    include_once ("db_connection.php");

    function post_valid($id_post){
        try {
            $conn=connection();
            $query = $conn->prepare("SELECT post.*, publication.date_pub, users.nom, users.prenom FROM post JOIN publication ON post.id_post = publication.id_post JOIN users ON post.id_user = users.id_user WHERE post.id_post = :id");
            $query->bindParam(":id", $id_post,PDO::PARAM_INT);
            $query->execute();  
            $resultat = $query->fetch(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $e) {
            throw new Exception("Error Searching the post: " . $e->getMessage());
        }
    }

?>