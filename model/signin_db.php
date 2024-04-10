<?php

    include_once ("db_connection.php");

/**
 * The function `search_user` searches for a user in the database based on their email and password,
 * and returns the user data if found.
 * 
 * The `email_us` parameter in the `search_user` function is used to specify the email
 * address of the user you want to search for in the database. This email address is then used in the
 * SQL query to retrieve the user information from the `users` table where the email matches the
 * provided email
 * The `pass_us` parameter in the `search_user` function is likely the password input
 * provided by a user attempting to log in. This password is then compared with the hashed password
 * stored in the database for the user with the provided email address to authenticate the user.
 * 
 * The function `search_user` is returning the user information (an associative array) from the
 * database if the email and password provided match the stored values. If the email is found in the
 * database and the password provided matches the hashed password stored in the database after
 * verification using `password_verify`, then the function returns the user information. 
 */
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

/**
 * The function `acc_valid` checks if a user has a valid account in a database.
 * 
 * The `acc_valid` function takes an `id_user` as a parameter and checks if there is an
 * associated account in the database for that user. It connects to the database, prepares and executes
 * a query to select the `id_account` from the `account` table where the `id_user`
 * 
 * The function `acc_valid` is returning a boolean value (`true` or `false`) based on whether
 * an account exists for the given ``. If an account is found in the database for the specified
 * user, it will return `true`, otherwise it will return `false`.
 */
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
