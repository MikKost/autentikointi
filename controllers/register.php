<?php
   
// Database connection
require 'controllers/tunnukset.php';
include('config/db.php');
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//$to = "jukka.aula@omnia.fi";
define('SMTPUSERNAME',$smtpUsername);
define('SMTPPASSWORD',$smtpPassword);

function posti($emailTo,$msg,$subject){
$emailFrom = "vkurssi2022@gmail.com";
$emailFromName = "Vahvistus";
$emailToName = "";
$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = SMTPUSERNAME;
$mail->Password = SMTPPASSWORD;
$mail->setFrom($emailFrom, $emailFromName);
$mail->addAddress($emailTo, $emailToName);
$mail->Subject = $subject;
$mail->msgHTML($msg); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
if(!@$mail->send()){
    $tulos = false;
}else{
    $tulos = true;
}
return $tulos;
}



    // Swiftmailer lib
    //require_once './lib/vendor/autoload.php';
    
    // Error & success messages
    global $success_msg, $email_exist, $f_NameErr, $l_NameErr, $_emailErr, $_passwordErr;
    global $fNameEmptyErr, $lNameEmptyErr, $emailEmptyErr, $passwordEmptyErr, $email_verify_err, $email_verify_success;
    
    // Set empty form vars for validation mapping
    $_first_name = $_last_name = $_email = $_password = "";

    if(isset($_POST["submit"])) {
        $firstname     = $_POST["firstname"];
        $lastname      = $_POST["lastname"];
        $email         = $_POST["email"];
        $password      = $_POST["password"];

        // check if email already exist
        $email_check_query = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}' ");
        $rowCount = mysqli_num_rows($email_check_query);


        // PHP validation
        // Verify if form values are not empty
        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_first_name = mysqli_real_escape_string($connection, $firstname);
                $_last_name = mysqli_real_escape_string($connection, $lastname);
                $_email = mysqli_real_escape_string($connection, $email);
                $_password = mysqli_real_escape_string($connection, $password);

                // perform validation
                if(!preg_match("/^[a-zA-Z ]*$/", $_first_name)) {
                    $f_NameErr = '<div class="alert alert-danger">
                            Only letters and white space allowed.
                        </div>';
                }
                if(!preg_match("/^[a-zA-Z ]*$/", $_last_name)) {
                    $l_NameErr = '<div class="alert alert-danger">
                            Only letters and white space allowed.
                        </div>';
                }
                if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                    $_emailErr = '<div class="alert alert-danger">
                            Email format is invalid.
                        </div>';
                }
                
                if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $_password)) {
                    $_passwordErr = '<div class="alert alert-danger">
                             Password should be between 6 to 20 charcters long, contains atleast one special chacter, lowercase, uppercase and a digit.
                        </div>';
                }
                
                // Store the data in db, if all the preg_match condition met
                if((preg_match("/^[a-zA-Z ]*$/", $_first_name)) && (preg_match("/^[a-zA-Z ]*$/", $_last_name)) &&
                 (filter_var($_email, FILTER_VALIDATE_EMAIL)) && 
                 (preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/", $_password))){

                    // Generate random activation token
                    $token = md5(rand().time());

                    // Password hash
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);

                    // Query
                    $sql = "INSERT INTO users (firstname, lastname, email, password, token, is_active,
                    date_time) VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$password_hash}', 
                    '{$token}', '0', now())";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 

                    // Send verification email
                    if($sqlQuery) {
                        $msg = 'Click on the activation link to verify your email. <br><br>
                          <a href="http://localhost:81/autentikointi/user_verification.php?token='.$token.'"> Click here to verify email</a>
                        ';
                        $subject = "Please Verify Email Address!";
                        $result = posti($email,$msg,$subject);
                          
                        if(!$result){
                            $email_verify_err = '<div class="alert alert-danger">
                                    Verification email coud not be sent!
                            </div>';
                        } else {
                            $email_verify_success = '<div class="alert alert-success">
                                Verification email has been sent!
                            </div>';
                        }
                    }
                }
            }
        } else {
            if(empty($firstname)){
                $fNameEmptyErr = '<div class="alert alert-danger">
                    First name can not be blank.
                </div>';
            }
            if(empty($lastname)){
                $lNameEmptyErr = '<div class="alert alert-danger">
                    Last name can not be blank.
                </div>';
            }
            if(empty($email)){
                $emailEmptyErr = '<div class="alert alert-danger">
                    Email can not be blank.
                </div>';
            }
           
            if(empty($password)){
                $passwordEmptyErr = '<div class="alert alert-danger">
                    Password can not be blank.
                </div>';
            }            
        }
    }
?>