<?php
session_start();
require "connect.php";
?>
<!doctype html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ali Emami and mohammad samadpour and alireza karimian">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PNU online compiler!</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <ul class="regLog mt-4 text-right w-100">
        <?php if (!isset($_SESSION['username'])) { ?>
            <li class="d-inline-block mr-2" data-toggle="modal" data-target="#loginModal">
                <a href="#" class="btn btn-outline-primary">Login</a>
            </li>
            <li class="d-inline-block" data-toggle="modal" data-target="#RegisterModal">
                <a href="#" class="btn btn-outline-primary">Register</a>
            </li>
        <?php } else { ?>
            <li class="d-inline-block">
                <a href="#">Welcome <?php echo $_SESSION['username']; ?>!</a>
            </li>
        <?php } ?>
    </ul>
    <div class="myForm mt-5">
        <form class="form-group" action="" method="post">
            <label class="form-check-label mb-3" for="myCode">Code: </label>
            <textarea class="codeArea form-control shadow-sm" name="code" id="myCode" cols="30" rows="10">
<!--ali-->
            </textarea>
            <button type="submit" class="mt-4 btn btn-primary float-right">Submit Code</button>
        </form>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Login">Login Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post" class="form-group">
                    <label for="name" class="form-check-label">Username: </label>
                    <input required minlength="4" name="LoginUsername" id="name" type="text" class="name form-control">

                    <label for="name" class="form-check-label mt-2">Password: </label>
                    <input required minlength="8" name="LoginPass" id="name" type="password" class="name form-control">
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-primary" type="submit">Login</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="Register"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Register">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <script type="text/javascript">

                    /**
                     * @return {boolean}
                     */

                    function RegValidateForm() {
                        var pass = document.getElementById('RegPass').value;
                        var passConf = document.getElementById("RegPassConf").value;

                        if (pass !== passConf) {
                            $(".passText").text("Password don't match with PasswordConfirm");
                            return false;

                        } else {
                            return true;
                        }
                    }

                </script>
                <form onsubmit="return RegValidateForm()" action="index.php" method="post" class="form-group RegForm">
                    <label for="RegName" class="form-check-label">FullName: </label>
                    <input minlength="3" required name="RegisterName" id="RegName" type="text"
                           class="RegName form-control">

                    <label for="RegUsername" class="form-check-label mt-2">Username: </label>
                    <input minlength="4" required name="RegisterUsername" id="RegUsername" type="text"
                           class="RegUsername form-control">

                    <label for="RegEmail" class="form-check-label mt-2">Email Address: </label>
                    <input required name="RegisterEmail" id="RegEmail" type="email" class="RegEmail form-control">

                    <label for="RegPass" class="form-check-label mt-2">Password: </label>
                    <input minlength="8" required name="RegisterPass" id="RegPass" type="password"
                           class="RegPass form-control">

                    <label for="RegPassConf" class="form-check-label mt-2">Password confirm: </label>
                    <input minlength="8" required name="RegisterPassConf" id="RegPassConf" type="password"
                           class="RegPassConf form-control">
                    <span class="passText"></span>

            </div>
            <div class="modal-footer">
                <button name="registerButton" class="btn btn-outline-primary" type="submit">Register</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/myScripts.js"></script>
</body>
</html>