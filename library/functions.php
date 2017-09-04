<?php

function strings_clear($string) {
$string = trim($string);
return htmlspecialchars($string, ENT_QUOTES);
}

function checkEmail($link, $email){
     $sql = "SELECT * FROM gbook WHERE email = '".$email."'";
     $res = mysqli_query($link, $sql);
     $rows = mysqli_num_rows($res);

     if($rows > 0){
         return false;
     }
     return true;
}


