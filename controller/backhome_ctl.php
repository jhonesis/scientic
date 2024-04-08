<?php
if(isset($_SESSION['email'])) {
    require RACINE ."/model/db_functions.php";
    require RACINE."/view/backhome_view.php";
}
?>