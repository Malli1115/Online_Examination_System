<?php
error_reporting(0);
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "oesold_db";

$servername = "remotemysql.com";
$username = "T7kmO8hUGi";
$password = "CdKqK6j8Og";
$dbname = "T7kmO8hUGi";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("<h2>Database Connection Failure : " . $conn->connect_error . "</h2><hr>");
} 
?>