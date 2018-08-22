<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;


switch(THIS_PAGE){
    case 'index.php':
        $title = "Big";
        $logo = '';
        $PageID = 'Portal Page';
    break;
    case 'galleries.php':
        $title = "Big";
        $logo = '';
        $PageID = 'Galerries';
    break;
    
    case 'flexbox.php':
        $title = "Big";
        $logo = '';
        $PageID = 'Flexbox';
    break;
    case 'parallax.php':
        $title = "Big";
        $logo = '';
        $PageID = 'Parallax';
    break;
    case 'shoppingcarts.php':
        $title = "Big";
        $logo = '';
        $PageID = 'Shopping Carts';
    break;
    case 'webcam.php':
        $title = "Big";
        $logo = '';
        $PageID = 'Web Cam';
    break;
    
    case 'siteapp.php':
        $title = "Big";
        $logo = '';
        $PageID = 'Site vs App';
    break;
    case 'google.php':
        $title = "Big";
        $logo = '';
        $PageID = 'Google products';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = 'Welcome';
        
}
$nav1['index.php'] = "Portal";
$nav1['galleries.php'] = "Galleries";
$nav1['flexbox.php'] = "Flexbox";
$nav1['parallax.php'] = "Parallax";
$nav1['shoppingcarts.php'] = "Shopping Cart";
$nav1['webcam.php'] = "Web Cam";
$nav1['siteapp.php'] = "Site vs App";
$nav1['google.php'] = "Google";





/* here we're creating a function to generate links and keep the highlight on the current page

<li><a href="index.php" class="selected">About_Us</a></li>
      <li><a href="menu.php">Our_Menu</a></li>
      <li><a href="order.php">Order_Here</a></li>
      <li><a href="rate.php">Rate_US</a></li>
      <li><a href="contactme.php">Contac_Us</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        if($url == THIS_PAGE){
           $myReturn .= "<li><a class=\"selected\" href=\$url\">$text</a></li>";   
        }else{
          $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;    
}


?>

