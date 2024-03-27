<?php 

    function connection(){
        try {
            require_once("../vendor/autoload.php");
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
            $dotenv->load();
            $dbh = new PDO("mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }    
?>    

    <?php 
        if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
            header('Content-Type:text/plain');

            echo "connection() : \n";
            print_r(connection());
        }    
    ?>