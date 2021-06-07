<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sms";

// Create connection
$mysql = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
}
?>