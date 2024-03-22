<?php 
    try {
        require_once("../vendor/autoload.php");
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
        $dotenv->load();
        $dbh = new PDO("mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (filter_var($_POST['Prix'], FILTER_VALIDATE_FLOAT) !== false && $_POST['Prix'] > 0) {
            $query = $dbh->prepare("INSERT INTO article (nom_art, price) VALUES (:description, :prix)");
            $query->bindParam(':description', $_POST['Description']);
            $query->bindParam(':prix', $_POST['Prix']);
            $query->execute();
            $message="Entrée Réussie";
        }else{
            $message="Prix Incorrect";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        echo"<h3>".$message."</h3>";
    }
?>    