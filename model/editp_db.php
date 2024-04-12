<?php
    include_once RACINE."/model/db_connection.php";
/**
 * The function `edit_user` updates a user's profile information in a database table with hashed
 * password.
 * 
 *  The `id_user` parameter in the `edit_user` function is used to specify the user ID of
 * the user whose profile is being edited. This parameter is used to identify the specific user in the
 * database so that their information can be updated accordingly.
 * The parameter "nom" in the function `edit_user` refers to the user's last name or
 * surname. It is used to update the last name of a user in the database.
 * The parameter "prenom" in the function `edit_user` refers to the first name of the
 * user. It is used to update the first name of a user in the database.
 * The `edit_user` function you provided is used to update a user's information in a
 * database. The parameters for the function are as follows:
 * 
 * function `edit_user` is returning a message "Profile edited" if the user profile is
 * successfully updated in the database.
 */
    function edit_user($id_user,$nom,$prenom,$email,$pass){
        try {
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $conn=connection();
            $query = $conn->prepare("UPDATE users SET nom = :nom, prenom = :prenom, email = :email, pass = :pass WHERE id_user = :id");
            $query->bindParam(":nom", $nom,PDO::PARAM_STR);
            $query->bindParam(":prenom", $prenom,PDO::PARAM_STR);
            $query->bindParam(":email", $email,PDO::PARAM_STR);
            $query->bindParam(":pass", $pass_hash,PDO::PARAM_STR);
            $query->bindParam(":id", $id_user,PDO::PARAM_INT);
            $query->execute(); 
            $message = "Profile edited";
            return $message;
        } catch (PDOException $e) {
            throw new Exception("Error editing the profile: " . $e->getMessage());
        }
    }
?>