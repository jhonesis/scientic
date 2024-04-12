<?php 

/**
 * The function establishes a connection to a MySQL database using environment variables loaded from a
 * .env file.
 * 
 * `connection()` function is returning a PDO (PHP Data Objects) database connection
 * object.
 */
    function connection(){
        try {
            require_once RACINE."/vendor/autoload.php";
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
/* The code block you provided is checking if the current script file being executed is the same as the
file itself. If this condition is true, it sets the content type of the response to plain text using
the `header()` function. Then, it outputs the text "connection() : " followed by the result of
calling the `connection()` function and printing the returned PDO database connection object using
`print_r()`. */
        if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
            header('Content-Type:text/plain');
            echo "connection() : \n";
            print_r(connection());
        }    
    ?>