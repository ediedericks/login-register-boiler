<?php

$servername = "localhost";
$username = "root";
$pwd = "EIG^MDNVN12";
$dbname = "photo-journal";

// Create connection
$conn = new mysqli($servername, $username, $pwd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>