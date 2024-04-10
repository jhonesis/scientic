<?php
/*User Authentication Logic:
If the user is not logged in (based on the $_SESSION['email'] variable), the route is set to /home_ctl.php.
If the user is logged in, the route is set to /backhome_ctl.php.
Action Handling:
If an action parameter is set in the URL, it retrieves the value.
Then, it determines the route based on the action using a custom function (presumably funrouter).
Include Controller File:
Finally, it includes the controller file corresponding to the determined route. */
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