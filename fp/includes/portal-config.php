<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Photography Services';

        break;

    case 'big/index.php':
        $title = "Isaac's IT162 Home Page";
        $logo = 'fa-home';
        $PageID = 'Big Assignment';
        break;

    case 'aia.php':
        $title = "Isaac's IT162 AIA Page";
        $logo = 'fa-users';
        $PageID = 'AIA Assignment';
        break;

    // case 'fp/index.html':
    //     $title = "Isaac's IT162 Home Page";
    //     $logo = 'fa-home';
    //     $PageID = 'Final Project';
    //     break;

    case 'flowchart.php':
        $title = "Isaac's IT162 Flowchart Page";
        $logo = 'fa-map-o';
        $PageID = 'Flowchart';
        break;

    case 'contactme.php':
        $title = "Isaac's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Isaac';
        break;

    case 'fp/index.php':
        $title = 'Photography Services';
        break;

    default:
        $title = THIS_PAGE;
}

?>
