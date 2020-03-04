<?php

  session_start();

  if ((isset($_POST["LoginUsername"])) && isset($_POST["LoginPass"]))
  {
    require "connect.php";
    //$username = $_POST['LoginUsername'];
    //$pass = $_POST['LoginPass'];
    $username = filter_input(INPUT_POST, 'LoginUsername', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'LoginPass', FILTER_SANITIZE_STRING);

    try 
    {
      $sql = "SELECT username, password FROM tblusers WHERE username='" . $username . "' AND password='" . $pass . "'";
      $retval = $conn->query($sql);

      if ($retval->rowCount()==0)
        echo "invalid username";
      else
      if ($row = $retval->fetch(PDO::FETCH_ASSOC))
      {
        echo "login successful<br/>";
        $_SESSION["username"] = $row["username"];
      }

      header("location:index.php");

    } 
    catch (PDOException $e) 
    {
      echo $e;
    }
  }

?>