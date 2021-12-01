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
        $title = "Isaac's IT162 Home Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
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

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = 'Home';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/templete.html'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Isaac';

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links

<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>


*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach ($nav1 as $url => $text) {
        if ($url == THIS_PAGE) {
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        } else {
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }

    return $myReturn;
}

?>
