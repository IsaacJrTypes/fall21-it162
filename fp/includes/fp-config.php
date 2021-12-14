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
    case 'index1.php':
        $title = 'Photography Services';
        break;

    case 'gallery.php':
        $title = "Octavio's Gallery";
        break;

    case 'blog.php':
        $title = 'Blog/About Page';
        break;

    case 'shopGallery.php':
        $title = 'Gallery Giftshop';
        break;

    case 'store.php':
        $title = "Octavio's Store";
        break;

    case 'contactme.php':
        $title = 'Contact Octavio';
        break;

    default:
        $title = THIS_PAGE;
}

?>
