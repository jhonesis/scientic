<?php

    include_once ("db_connection.php");

    function search_user($email_us,$pass_us){
        try {
            $conn=connection();
            $query = $conn->prepare("SELECT * FROM users WHERE  email=:email");
            $query->bindParam(':email', $email_us,PDO::PARAM_STR);
            $query->execute();  
            $resultat = $query->fetch(PDO::FETCH_ASSOC);
            if (!empty($resultat)) {
                $pass_has=$resultat["pass"];
                if (password_verify($pass_us, $pass_has)) {
                    return $resultat;
                }
            }  
        } catch (PDOException $e) {
            throw new Exception("Error finding the user: " . $e->getMessage());
        }

    }

    function acc_valid($id_user){
        try {
            $conn=connection();
            $query = $conn->prepare("SELECT id_account FROM account WHERE  id_user=:user");
            $query->bindParam(':user', $id_user,PDO::PARAM_INT);
            $query->execute();  
            $resultat = $query->fetch(PDO::FETCH_ASSOC);
            if (!empty($resultat)) {
                $status=true;
            } else {
                $status=false;
            }
            return $status;
        } catch (PDOException $e) {
            throw new Exception("Error validating the account: " . $e->getMessage());
        }
    }

?>    
