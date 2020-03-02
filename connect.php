<?php

include "";


/*$servername = "localhost";
$username = "root";
$password = "";*/

try {
    $conn = new PDO("mysql:host=$servername;dbname=pnu_db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}