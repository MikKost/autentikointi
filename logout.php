<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost:81/Projekti/signin.php");
?>
<?php   
    /* JAu */  
    $projekti = "projekti";
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $polku = "https://";   
    else  
        $polku = "http://";   
    $polku.= $_SERVER['HTTP_HOST'] . "/" . $projekti;   
    // $polku = "http://localhost:8888/php-user-authentication//localhost:8888/autentikointi";
    session_start();
    $_SESSION = array();
    session_destroy();
      
    header("Location: $polku/signin.php");
;?>