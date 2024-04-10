<?php
if(isset($_SESSION['email'])) {
    require RACINE ."/model/disablea_db.php";
    require RACINE."/view/disablea_view.php";
}
?>