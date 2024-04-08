<?php

    include_once ("db_connection.php");
//************************************************************************************function copied
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
//*********************************************************************************************************************************************/
//************************************************************************************function copied
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
//*********************************************************************************************************************************************/
//***************************************************************************************function copied
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
//****************************************************************************************************************************************** */
    function posts_invalid(){
        try {
            $conn=connection();
            $query = $conn->prepare("SELECT * FROM post WHERE id_post NOT IN (SELECT id_post FROM publication)");
            $query->execute();  
            $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $e) {
            throw new Exception("Error validating the post: " . $e->getMessage());
        }
    }

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
//***************************************************************************************function copied
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
            throw new Exception("Error inserting the post: " . $e->getMessage());
        }
    }
//*********************************************************************************************************************************************/
    function pub_post($id_post,$id_user){
        try {
            $date = date('Y-m-d');
            $conn=connection();
            $query = $conn->prepare("INSERT INTO publication (id_user, id_post, date_pub) VALUES (:user, :post, :date)");
            $query->bindParam(":user", $id_user,PDO::PARAM_INT);
            $query->bindParam(":post", $id_post,PDO::PARAM_INT);
            $query->bindParam(":date", $date,PDO::PARAM_STR);
            $query->execute(); 
            $message="Post published correctly";
            return $message;
        } catch (PDOException $e) {
            throw new Exception("Error inserting the post: " . $e->getMessage());
        }
    }

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

    <?php 
        // prog principal de test
        if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
            header('Content-Type:text/plain');
        
            echo " Function:search_user() : \n";
            print_r(search_user("pepito@test.com","987250jd"));

            echo " Function:posts_pub() : \n";
            //print_r(post_valid(2));

            echo " Function:posts_nopub() : \n";
            print_r(posts_invalid());

            echo " Function:list_post() : \n";
            print_r(list_post());

            echo " Function:pub_post() : \n";
            //print_r(pub_post(6,3));

            echo "function: add_post()  :\n";
            //print_r(add_post("article 5", "image 5", "Resume 5", "Description 5", 3));

            //print_r(edit_user(3,"perez","pepito","pepito@test.com","987250jd"));
        }        
    ?>
