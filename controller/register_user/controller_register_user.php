<?php
    ini_set('display_error', 1);
    error_reporting(E_ALL);

    session_start();

    include('../database/controller_database.php');

    $DateAndTime = date('Y-m-d H:i:s a', time());  

    $registerData = json_decode($_POST['data'], true, 512, JSON_UNESCAPED_UNICODE);

    $fullname = $registerData["fullname"];
    $email = $registerData["email"];
    $password = $registerData["password"];
    $re_password = $registerData["re-password"];

    $ssql = "select email from users where email = '{$email}'";
    $stmt = $pdo->prepare($ssql);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo 'false-email';
        exit();
    }

    $ssql = "insert into users (name, email, password, created_at, user_account_type) values ('{$fullname}', '{$email}', md5('{$password}'), '{$DateAndTime}', 1)";
    $stmt = $pdo->prepare($ssql);
    $stmt->execute();

    if($stmt){
        echo 'true-insert';
        exit();
    }else{
        echo 'false-insert';
        exit();
    }
?>