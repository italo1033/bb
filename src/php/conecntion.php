<?php
$servername = "localhost";
$database = "biblioteca";
$username = "";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


