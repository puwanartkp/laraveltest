<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arena_groove";
$base_url = 'http://localhost/arena_groove/';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
