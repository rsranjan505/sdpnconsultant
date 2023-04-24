<?php 

include "app/config.php";

$userBrowser = $_SERVER['HTTP_ACCEPT']; 
$browser_t = "public";


//Define Global Variable
$domain="http://sdpnconsultant.com";
$contact_number="+91 834-045-7431";
$whatsapp="+918340457431";
$address="H NO-13/66/3,NORTH ANANDPURI WEST BORING CANAL ROAD,NEAR JAL PARISHAD OFFICE PATNA Patna BR 800001 IN";
$email="info@sdpnconsultant.com";
$contact_email="contact@sdpnconsultant.com";
$facebook="";
$instagram="";
$twitter="";
$author="sdpnconsultant.COM";




//defina main index file below from variables

include $browser_t.'/index.php';


?>

