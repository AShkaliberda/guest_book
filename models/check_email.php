<?php
require_once("../config.php");
$db = db_connect();

$email = $_POST['email'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'invalid';
}else {
     $sql = "SELECT * FROM gbook WHERE email = '".$email."'";
     $res = mysqli_query($db, $sql);
     $rows = mysqli_num_rows($res);

     if($rows > 0){
         echo 'invalid';
     }else {
      echo 'valid';
     }
}