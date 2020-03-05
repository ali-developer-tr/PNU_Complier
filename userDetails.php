<?php


function userDerails()
{
    include "connect.php";
    $details = array();
    $username = $_SESSION['username'];
    $q = "SELECT * FROM tblusers WHERE username=:username";
    $result = $conn->prepare($q);
    $result->bindParam(':username', $username);
    $result->execute();

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $details = array(
        "firstname" => $row['firstname'],
        "lastname" => $row['lastname'],
        "username" => $row['username'],
        "email" => $row['email'],
        "photo" => $row['photo'],
        "birthday" => $row['birthday'],
        "bio" => $row['bio'],
        "registertime" => $row['registertime'],
        "score" => $row['score'],
        "languages" => $row['languages'],
        "namechangecount" => $row['namechangecount'],
        "privacy" => $row['privacy']
    );
    return $details;
}
