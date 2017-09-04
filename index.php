<?php
require_once "config.php";
$db = db_connect();
require_once "models/commentsList.php";

$comments = showComments($db);

include("views/view.php");

