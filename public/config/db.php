<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $base_url = 'http://localhost/arena_groove/home.php';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=arena_groove", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $e->getMessage();
    }
