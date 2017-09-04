<?php
    require_once("../config.php");
    $db = db_connect();
    require_once("../library/functions.php");

    $name = strings_clear($_POST['userName']);
    $email = $_POST['email'];
    $message = strings_clear($_POST['message']);
    $message = nl2br($message);

    $sql = "INSERT INTO gbook(name, email, message) VALUES ('%s','%s','%s')";
    $query = sprintf($sql, mysqli_real_escape_string($db, $name),
                           mysqli_real_escape_string($db, $email),
                           mysqli_real_escape_string($db, $message));

    $res = mysqli_query($db, $query);

    if(!$res){
        die(mysqli_error($db));
    }
    header("Location:../index.php");
