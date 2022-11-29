<?php
    ini_set('display_error', 1);
    error_reporting(E_ALL);

    session_start();

    include('../database/controller_database.php');

    $registerData = json_decode($_POST['data'], true, 512, JSON_UNESCAPED_UNICODE);

    $fullname = $registerData["fullname"];
    $email = $registerData["email"];
    $password = $registerData["password"];
    $re_password = $registerData["re-password"];

    $ssql = ""
?>