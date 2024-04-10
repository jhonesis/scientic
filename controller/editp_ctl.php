<?php
if(isset($_SESSION['email'])) {
    require RACINE ."/model/editp_db.php";
    require RACINE."/view/editp_view.php";
}
?>