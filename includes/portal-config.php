<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Sara's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contactme.php':
        $title = "Sara's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Sara';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }


?>
