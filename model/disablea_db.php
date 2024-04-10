<?php
    include_once ("db_connection.php");
/**
 * The function `dis_acc` is a PHP function that deletes an account from a database
 * table based on the provided `id_user`. It first establishes a connection to the database, prepares a
 * DELETE query to remove the account with the specified `id_user`, binds the `id_user` parameter to
 * the query
 * 
 * function `dis_acc` returns a message indicating whether the account was deleted
 * successfully or not. The message will be "Account deleted successfully!" if the account was deleted,
 * and "Account not found. No account was deleted." if the account was not found and therefore not
 * deleted.
 */
    function dis_acc($id_user){
        try {
            $conn=connection();
            $query=$conn->prepare("DELETE FROM account WHERE id_user = :iduser");
            $query->bindParam(":iduser",$id_user);
            $query->execute();
            $rowsDeleted = $query->rowCount();
            if ($rowsDeleted > 0) {
                $message = "Account deleted successfully!";
            } else {
                $message = "Account not found. No account was deleted.";
            }
            return $message;
        } catch (PDOException $e) {
            throw new Exception("Error deleting the account: " . $e->getMessage());
        }
    }
?>