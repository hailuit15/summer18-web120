<?php
/* BIG CONFIG */
/* config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LdkE2UUAAAAALhK3TBQx3IO5rBmJdsMA6vj2BTY";
$secretKey = "6LdkE2UUAAAAADIAurvSWjSeOlRaOXgh-zQhNEct";


//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

//this constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    
    case "index.php":
        $title = "Web Development Big Page Examples";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
        
    case "flexbox.php":
        $title = "Hailu's Flexbox Research";
        $logo = "";
        $PageID = "Flexbox Research";
    break;
    
    case "galleries.php":
        $title = "Hailu's Galleries Research";
        $logo = "";
        $PageID = "Galleries Research";
    break;
    
    case "map.php":
        $title = "Hailu's Google Map";
        $logo = "";
        $PageID = "Google Map";
    break;   
        
    case "calendar.php":
        $title = "Hailu's Google Calendar";
        $logo = "";
        $PageID = "Google Calendar";
    break;
    
    case "youtube.php":
        $title = "WordPress Intro YouTube";
        $logo = "";
        $PageID = "YouTube";
    break;   
    
    case "parallax.php":
        $title = "Hailu's Parallax Research";
        $logo = "";
        $PageID = "Parallax Research";
    break;   
    
    case "shoppingcarts.php":
        $title = "Hailu's Shopping Carts Research";
        $logo = "";
        $PageID = "Shopping Cart Research";
    break;
        
     case "siteapp.php":
        $title = "Hailu's Responsive Website v.s. Mobile app";
        $logo = "";
        $PageID = "Responsive Website v.s. Mobile app";
    break;
    
    case "webcam.php":
        $title = "Hailu's two examples of web cams";
        $logo = "";
        $PageID = "Two examples of web cams";
    break;   
        
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
    break;
        
        
        
}
        