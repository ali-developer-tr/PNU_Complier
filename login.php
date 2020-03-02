<?php

session_start();

require "connect.php";

$username = $_POST['LoginUsername'];
$pass = $_POST['LoginPass'];

$status = "";

try {
    $query = "SELECT username, password FROM users WHERE username='" . $username . "' AND password='" . $pass . "'";
    $result = $conn->prepare($query);
    $result->execute();

    if ($result) {

        $_SESSION['username'] = $username;

    }

    header("location:index.php");


} catch (PDOException $e) {
    echo $e;
}

