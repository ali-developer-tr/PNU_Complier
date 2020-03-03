<?php
$item=filter_input(INPUT_GET, 'item',FILTER_VALIDATE_INT,null);
 if (($item>5) || ($item<0))
 {
   session_start();
   $_SESSION['ErrorMsg']="page not found";
   header("Location: error.php"); 
   exit(); 
 }
include "header.php";
include "connect.php";
include "Dashboard_Navbar.php";
switch ($item)
{
  case 1: include "edit_profile.php"; break;
  case 2: include "groups.php"; break;
  case 3: include "submissions.php"; break;
  case 4: include "contests.php"; break;
  case 5: include "friend.php"; break;

}

if($item==0){
?>

<h1>Dashboard!</h1>


<?php
}
include "footer.php";