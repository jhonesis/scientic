<?php
if(isset($_SESSION['email'])) {
    require RACINE ."/model/insertp_db.php";
    require RACINE."/view/insertp_view.php";
}
?>