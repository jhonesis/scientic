<?php
if(isset($_SESSION['email'])) {
    require RACINE ."/model/db_functions.php";
    require RACINE."/view/editp_view.php";
}
?>