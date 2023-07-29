<?php

$data = array();
include "../../config/config.php";

// SQL query to fetch data
$query = "SELECT * FROM employee";

// Execute the query
$result = $mysqli->query($query);

$data["data"]= $result->fetch_assoc();
$data["status"]= TRUE;

echo json_encode($data);

?>
