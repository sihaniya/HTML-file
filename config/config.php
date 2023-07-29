<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax-crud-php";

// CREAT A MYSQLI ISTANCE
$mysqli = new mysqli($servername, $username, $password, $dbname);

// check for connection errors
if($mysqli->connect_errno){
    echo "failed to connect to MYSQL:".$mysqli->connect_error;
    exit();
}



?>