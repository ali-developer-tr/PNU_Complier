<?php
session_start();

$_SESSION['ErrorMsg'];

require 'vendor/autoload.php';

use Carbon\Carbon;

require "connect.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$name = $_POST['RegisterName'];
$username = $_POST['RegisterUsername'];
$email = $_POST['RegisterEmail'];
$password = $_POST['RegisterPass'];

$code = rand(100000, 999999);

$time = Carbon::now();

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->Username = "pnu.contest@gmail.com";
$mail->Password = "alirezaalimohammad";

$mail->IsHTML(true);
$mail->AddAddress("recipient-email@domain", "pnu-contest");
$mail->SetFrom("pnu.contest@gmail.com", "pnu-contest");
$mail->AddReplyTo("pnu.contest@gmail.com", "pnu-contest");
$mail->Subject = "Verify your pnu contest account";
$content = "<b>Verification Code: </b>" . $code;

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

    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        echo "Error while sending Email.";
        var_dump($mail);
        $_SESSION['ErrorMsg'] = "Error while sending Email.";
    } else {
        header("location:index.php");
    }

} catch (PDOException $e) {
    echo $e;

}
