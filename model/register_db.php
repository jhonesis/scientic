<?php
    include_once ("db_connection.php");
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