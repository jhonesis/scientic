<?php

/**
 * The function `funrouter` takes an action as input and returns the corresponding route for that
 * action in a PHP application.
 * 
 * The function `funrouter` takes an action parameter and returns the corresponding route
 * based on the action provided.
 * 
 * function `funrouter` returns the route based on the provided action. The route returned
 * depends on the action specified in the switch case. If the action matches one of the cases, the
 * corresponding route is returned. If the action does not match any of the cases, the default route
 * `/404_ctl.php` is returned. */
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
        case 'insertp':
            $rout= "/insertp_ctl.php";
            break;      
        case 'activatep':
            $rout= "/activatep_ctl.php";
            break;   
        case 'editp':
            $rout= "/editp_ctl.php";
            break;   
        case 'disablea':
            $rout= "/disablea_ctl.php";
            break;         
        default:
            $rout="/404_ctl.php";
            break;
    }
    return $rout;
 }
?>