<?php
/* tunnukset.php */
$smtpUsername = "wohjelmointi@gmail.com";
$smtpPassword = "dummypw";

$db_username_local = 'root';
$db_password_local = 'dummypw';
$db_server_local = "127.0.0.1";
$site_local = "http://localhost";

if (strpos($_SERVER['HTTP_HOST'],"azurewebsites") !== false){
  $db_username_remote = 'azure';
  $db_password_remote = "6#vWHD_$";
  $db_server_remote = "localhost:51008";
  $site_remote = 'https://jukkaa2.azurewebsites.net';
  }
?>