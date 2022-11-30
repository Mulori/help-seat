<?php
    ini_set('display_error', 1);
    error_reporting(E_ALL);

    session_start();

    include('../database/controller_database.php');

    $registerData = json_decode($_POST['data'], true, 512, JSON_UNESCAPED_UNICODE);

    $email = $registerData["email"];
    $senha = $registerData["senha"];

    $ssql = "select id from users where email = '{$email}' and password = md5('{$senha}')";
    $stmt = $pdo->prepare($ssql);
    $stmt->execute();

    $user_data = $stmt->fetchAll();

    if($stmt->rowCount() > 0){

        foreach($user_data as $user){
            $_SESSION['user_id'] = intval($user['id']);
        }
        
        echo 'login-ok';
        exit();
    }else{
        echo 'login-error';
        exit();
    }
?>