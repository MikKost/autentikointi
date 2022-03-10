<?php
/* tunnukset.php */
//include ('db_functions.php');
//$mysql = db_connect(); 

$smtpUsername = "vkurssi2022@gmail.com";
$smtpPassword = "Veikko01!";

$db_username_local = 'root';
$db_password_local = 'Veikko01!';
$db_server_local = "127.0.0.1";
$site_local = "http://localhost";

if (strpos($_SERVER['HTTP_HOST'],"azurewebsites") !== false){
  $db_username_remote = 'azure';
  $db_password_remote = "6#vWHD_$";
  $db_server_remote = "localhost:53777";
  $site_remote = 'https://mikkoko.azurewebsites.net';
  }
?>
