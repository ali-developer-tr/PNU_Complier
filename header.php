<?php
session_start();
require "connect.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Programming">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,python,java,c++,c,c#">
    <meta name="author" content="Ali Emami and Mohammad Samadpour and Alireza Karimian">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PNU online compiler!</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/palette.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/img/pnuLogo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-rig ">
                <?php if (!isset($_SESSION['username'])) { ?>
                    <li><a class="mr-3" data-toggle="modal" data-target="#RegisterModal">Register <i
                                    class="fa fa-user ml-2"></i></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#LoginModal">Login <i
                                    class="fa fa-sign-in-alt ml-2"></i></a></li>
                <?php } else { ?>
                    <li class="d-inline-block">
                        <a href="#">Welcome <?php echo $_SESSION['username']; ?>!</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<hr>
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Login">Login From</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post" class="form-group">
                        <label for="name" class="form-check-label">Username: </label>
                        <input required minlength="4" name="LoginUsername" id="name" type="text"
                               class="name form-control">

                        <label for="name" class="form-check-label mt-2">Password: </label>
                        <input required minlength="8" name="LoginPass" id="name" type="password"
                               class="name form-control">
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
                    <h5 class="modal-title" id="Register">Register Form</h5>
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
                    <form onsubmit="return RegValidateForm()" action="register.php" method="post"
                          class="form-group RegForm">
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
