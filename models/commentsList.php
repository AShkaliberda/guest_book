<?php

function showComments($link){
    global $total_pages;
    $query = "SELECT message FROM gbook";
    $result = mysqli_query($link, $query);

        if(!$query){
            die(mysqli_error($link));
        }

    $rows = mysqli_num_rows($result);//количество записей
    $total_pages = ceil($rows / 5);//количество страниц

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if($page > $total_pages && $total_pages != 0){
        $page = $total_pages;
    }elseif($page < 1 || $page == ""){
        $page = 1;
    }

    $start = ($page - 1) * 5;

    $sql = "SELECT name, message FROM gbook ORDER BY date DESC LIMIT $start, 5";
    $res = mysqli_query($link, $sql);

    $arr = [];
    while($row = mysqli_fetch_assoc($res)){
        $arr[] = $row;
    }
return $arr;
}


