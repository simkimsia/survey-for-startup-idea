<?php
session_start();
require_once("rb.php");
include("db.php");

R::setup("mysql:host=$host;dbname=$database_name", $user, $password);


if(isset($_POST["btnSubmit"])) {


    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];

    $q2_monthly_price = $_POST['monthly_price'];
    $q2_percentage = $_POST['percentage'];

    $email = $_POST['email'];

    $user = R::dispense('user');
    $user->sell_or_not = $question1;
    $user->willing_to_pay = $question2;
    if($q2_monthly_price) {
        $user->monthly_price = $q2_monthly_price;
    }
    else {
        $user->monthly_price = NULL;
    }

    if($q2_percentage) {
        $user->percentage = $q2_percentage;
    }
    else {
        $user->percentage = NULL;
    }

    $user->email = $email;
    $user->timestamp = date("F j, Y, g:i a");

    $id = R::store($user);

    // To keep track the current user
    $_SESSION['user_id'] = $id;

    $sid = $_SESSION['user_id'];

    if($question1 == 'No') {
        header("Location:thankyou.php");
    }
    else {
        header("Location:page2.php?email=$email");
    }
}

else {

    echo "Havent' got it yet!";
}




