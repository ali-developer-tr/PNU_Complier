<?php
session_start();


require "connect.php";


$name = $_POST['RegisterName'];
$username = $_POST['RegisterUsername'];
$email = $_POST['RegisterEmail'];
$password = $_POST['RegisterPass'];

$code = rand(100000, 999999);

$time = $date = date('Y-m-d H:i:s');

try {
    $query = "INSERT INTO tblusers(name, username, password, email, verificationcode, registertime) VALUE (:name,:username,:password,:email, :verificationcode, :registertime)";
    $result = $conn->prepare($query);
    $result->bindParam(":name", $name);
    $result->bindParam(":username", $username);
    $result->bindParam(":password", $password);
    $result->bindParam(":email", $email);
    $result->bindParam(":verificationcode", $code);
    $result->bindParam(":registertime", $time);
    $result->execute();


    header("location:index.php");

} catch (PDOException $e) {
    echo $e;

}
