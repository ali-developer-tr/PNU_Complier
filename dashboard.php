<?php
$item = filter_input(INPUT_GET, 'item', FILTER_VALIDATE_INT, null);
if (($item > 5) || ($item < 0)) {
    session_start();
    $_SESSION['ErrorMsg'] = "page not found";
    header("Location: error.php");
    exit();
}
include "header.php";
include "connect.php";
include "Dashboard_Navbar.php";
switch ($item) {
    case 1:
        include "edit_profile.php";
        break;
    case 2:
        include "groups.php";
        break;
    case 3:
        include "submissions.php";
        break;
    case 4:
        include "contests.php";
        break;
    case 5:
        include "friend.php";
        break;

}

if ($item == 0) {
    ?>

    <?php
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
        "score" => $row['score'],
        "languages" => $row['languages'],
        "namechangecount" => $row['namechangecount'],
        "privacy" => $row['privacy']
    );


    ?>

    <h1>Dashboard!</h1>
    <hr>
    <div class="row">
        <div class="col-6">
            <div class="dash-left shadow p-4">
                <ul>
                    <li>
                        <span>Name: </span>
                        <span><?php echo $details['firstname']?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="dash-right">
                <ul>
                    <li>
                        <span></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php
}
include "footer.php";