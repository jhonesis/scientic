<?php
if(isset($_SESSION['email'])) {
    require RACINE ."/model/activatep_db.php";
    require RACINE."/view/activatep_view.php";
}
?>