<?php
    session_start();
    require("./confi/config.php");
    require RACINE ."/confi/route.php";

    if(!isset($_SESSION['email'])) {
        $rout="/home_ctl.php";
    }else{
        $rout="/backhome_ctl.php";
    }
    
    if (isset($_GET["action"]) && $_GET["action"]){
        $action = $_GET["action"];
        $rout=funrouter($action);
    }
    
    require RACINE."/controller".$rout;    

?>