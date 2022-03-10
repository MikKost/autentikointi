<?php
include ("config/db.php");
if(isset($_POST['submit_password'])){
    $id = $connection->real_escape_string(strip_tags($_POST['id']));
    $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
    $query = "UPDATE user SET password = '$pass' WHERE id = '$id'";
    $result = mysqli_query($connection,$query);
}
?>