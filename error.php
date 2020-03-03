<?php
//session_start();
include "header.php";
?>

<div class="alert alert-danger">
  <?php echo $_SESSION['ErrorMsg']; ?>
</div>


<?php
include "footer.php";
