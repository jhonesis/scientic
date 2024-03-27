<?php
$rout=null;
 function funrouter($action){
    switch ($action) {
        case 'home':
            $rout= "/home_ctl.php";
            break;  
        case 'nasa':
            $rout= "/nasa_ctl.php";
            break;  
        case 'projects':
            $rout= "/projects_ctl.php";
            break; 
        case 'contact':
            $rout= "/contact_ctl.php";
            break;  
        case 'signin':
            $rout= "/signin_ctl.php";
            break; 
        case 'register':
            $rout= "/register_ctl.php";
            break;     
        case 'logout':
            $rout= "/logout_ctl.php";
            break;    
        case 'project':
            $rout= "/project_ctl.php";
            break;      
        default:
            $rout="/404_ctl.php";
            break;
    }
    return $rout;
 }

?>