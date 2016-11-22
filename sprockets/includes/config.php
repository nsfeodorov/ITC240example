<?php
//config.php

//this enable pages to know their own names
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//this clears date errors of all sorts
date_default_timezone_set('America/Los_Angeles');

//this is inside the h1 on header.php
$banner = 'Banner Goes Here';

//to highlight the current page in the nav
$nav1['index.php'] ='Home';
$nav1['projects.php'] ='Projects';
$nav1['contact.php'] ='Contact';
$nav1['stuff.php'] ='Stuff';
$nav1['customers.php'] ='Customers';

//to change content in header for each page
switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Home Page';
        $banner = 'Welcome';
        $pic = 'images/sprocket1.jpg';
    break;
        
    case 'projects.php':
        $title = 'Projects Page';
        $banner = 'Our Recent Projects';
        $pic = 'images/sprocket2.jpg';
    break;
        
    case 'contact.php':
        $title = 'Contact Page';
        $banner = 'Contact Us';
        $pic = 'images/sprocket3.jpg';
    break;
        
    case 'stuff.php':
        $title = 'Other Stuff';
        $banner = 'A Bunch of Other Stuff';
        $pic = 'images/sprocket4.jpg';
    break;
        
        case 'customers.php':
        $title = 'Customers';
        $banner = 'Our Customers';
        $pic = 'images/sprocket5.jpg';
    break;
        
    default:
        $title = THIS_PAGE;
        $banner = 'Banner Goes Here';
        $pic = 'images/sprocket5.jpg';
        
}

//stores database login info
include 'credentials.php';

//function to highlight the current page in the nav
function makeLinks($nav)
{
  $myReturn =""; 
    
    foreach($nav as $url => $text){
        
        if(THIS_PAGE == $url){
            
            $myReturn .='<li class="current"><a href="' . $url . '">' . $text . '</a></li>'; 
            
        }else{
            
             $myReturn .='<li><a href="' . $url . '">' . $text . '</a></li>';
        }   
    }
    
  return $myReturn;
}


define('DEBUG',TRUE); #we want to see all errors


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}




?>

