<?php
    include_once ("db_connection.php");

/**
 * The function `post_valid` retrieves information about a post, including publication date and user
 * details, based on the post ID.
 * 
 * The `post_valid` function is a PHP function that takes an `id_post` as a parameter
 * and retrieves information about a post from a database. The function connects to a database,
 * executes a query to select data related to the specified `id_post`, and then fetches the result as
 * an associative
 * 
 * `post_valid` function is returning an associative array containing the details of a
 * post, including the post data, publication date, user's name, and user's surname.
 */
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