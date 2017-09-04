<?php
function db_connect(){

    $link = mysqli_connect('localhost', 'root', '', 'gbook');

    if (!$link) {
    echo "Errno code: " . mysqli_connect_errno();
    echo "Error code: " . mysqli_connect_error();
    exit;
}
    return $link;
}

