<?php
    include_once RACINE."/model/db_connection.php";
/**
 * The function `add_user` inserts a new user into a database table with hashed password and a default
 * role of "contributor".

 * The `add_user` function you provided is a PHP function that inserts a new user into a
 * database table named `users`. The function takes four parameters: `` (user's last name),
 * `` (user's first name), `` (user's email address), and `` (user's password)
 * 
 * The function `add_user` is returning the message "Register Confirmed."
 */
    function add_user($nom,$prenom,$email,$pass){
        try {
            $role="contributor";
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $conn=connection();
            $query = $conn->prepare("INSERT INTO users (nom, prenom, email, pass, role) VALUES (:nom, :prenom, :email, :pass, :role)");
            $query->bindParam(":nom", $nom,PDO::PARAM_STR);
            $query->bindParam(":prenom", $prenom,PDO::PARAM_STR);
            $query->bindParam(":email", $email,PDO::PARAM_STR);
            $query->bindParam(":pass", $pass_hash,PDO::PARAM_STR);
            $query->bindParam(":role", $role,PDO::PARAM_STR);
            $query->execute(); 
            $message = "Register Confirmed.";
            return $message;
        } catch (PDOException $e) {
            throw new Exception("Error inserting the user: " . $e->getMessage());
        }
    }
?>    