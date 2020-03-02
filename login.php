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





/*

if ((isset($_POST["username"])) && isset($_POST["password"]))
{
    try
    {
        $mysql = new mysqli('localhost', 'ramin', '1234mashramin', 'programm_testdb');
    }

    catch (Exception $e)
    {
        echo "Service unavailable";
        echo "message: " . $e->message;   // not in live code obviously...
        exit;
    }
    $sql = "SELECT * FROM programm_testdb.tblcustomers where username='" . $_POST["username"] . "'";

    $retval = $mysql->query($sql);
    if (!mysqli_num_rows($retval))
    {
        echo "invalid username";
    }
    else
        if ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
        {
            if ($row['Password'] == $_POST["password"])
            {
                echo "login successful<br/>";
                $_SESSION["username"] = $row["UserName"];
            } else
            {
                echo "invalid password";
            }
        }
}
*/