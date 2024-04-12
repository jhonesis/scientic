<?php
    include_once RACINE."/model/db_connection.php";
/**
 * The function `add_post` inserts a new post into a database table with the provided title, image,
 * summary, description, and user ID.
 * 
 * The parameter "titre" in the function "add_post" refers to the title of the post that
 * you want to add to the database. This title will be stored in the "titre" column of the "post"
 * table. When calling this function, you need to provide the title of the post
 * The `image` parameter in the `add_post` function is used to store the image file path
 * or URL associated with the post. When calling the `add_post` function, you should provide the path
 * or URL of the image that you want to associate with the post. This could be a local
 * The `resume` parameter in the `add_post` function seems to represent a brief summary
 * or overview of the post content. It is likely used to provide a link to the repository of the post into 
 * 'description'.
 * The function `add_post` is designed to insert a new post into a database table
 * named `post`. It takes five parameters:
 * The `id_user` parameter in the `add_post` function represents the user ID of the user
 * who is creating or adding the post. This parameter is used to associate the post with a specific
 * user in the database. It is expected to be an integer value that corresponds to the ID of the user
 * 
 * The function `add_post` is returning the message "Post Inserted Correctly" if the post is
 * inserted successfully.
 */
    function add_post($titre,$image,$resume,$description,$id_user){
        try {
            $conn=connection();
            $query = $conn->prepare("INSERT INTO post (titre, image, resume, description, id_user) VALUES (:titre, :image, :resume, :description, :id_user)");
            $query->bindParam(":titre", $titre,PDO::PARAM_STR);
            $query->bindParam(":image", $image,PDO::PARAM_STR);
            $query->bindParam(":resume", $resume,PDO::PARAM_STR);
            $query->bindParam(":description", $description,PDO::PARAM_STR);
            $query->bindParam(":id_user", $id_user,PDO::PARAM_INT);
            $query->execute(); 
            $message= "Post Inserted Correctly";
            return $message;
        } catch (PDOException $e) {
            throw new Exception("Error inserting the post: " . $e->getMessage());
        }
    }
?>