<?php

require "connect.php";

$name = $_POST['RegisterName'];
$username = $_POST['RegisterUsername'];
$email = $_POST['RegisterEmail'];
$password = $_POST['RegisterPass'];


try {
    $query = "INSERT INTO users(name, username, email, password) VALUE (:name,:username,:email,:password)";
    $result = $conn->prepare($query);
    $result->bindParam(":name", $name);
    $result->bindParam(":username", $username);
    $result->bindParam(":email", $email);
    $result->bindParam(":password", $password);
    $result->execute();

    header("location:index.php");

} catch (PDOException $e) {
    echo $e;

}


